// funnyordie.com
var ISCommonAnalyster = {};

(function() {
	var videoURL;
	var downloadBtnDiv;

// 针 对 Vimeo 网 站
	function htmlFive(element) {
		var videoURL = document.location.href;
		var url = videoURL;
		if(url.indexOf("vimeo.com") != -1 && isHTML5 == true)
		{
			vplayerDiv = element.parentNode.parentNode.parentNode;
			var encodeData = "pageUrl=" + videoURL + "-WS-GUES-cookies=" + document.cookie;
			vbtnDownload = ISCore.attachButtonDiv(vplayerDiv, ISExtensionConfig.getDownloadButtonPosition(), "", ISExtensionConfig.getInvokeProtocol() + ISCore.base64Encode(encodeData));
			ISCore.bind_mouseover(vplayerDiv, vbtnDownload);
		}	      
    }

// 针 对 lynda 网 站
    function islynda(event)
    {
        var videoURL = document.location.href;
        if (videoURL.indexOf("lynda.com") == -1) return false;
	    if (ISCore.getBrowserIndent() != "firefox") 
	        return (event.target instanceof HTMLDivElement) && (event.target.getAttribute("class").indexOf("ToggleOverlay") != -1);
		else
		    return (event.originalTarget.toString().indexOf("HTMLDivElement") != -1) && (event.target.getAttribute("class").indexOf("ToggleOverlay") != -1);
    }

	function handleMouseoverEvent(event) {
		var validTarget = false ;
		if (ISCore.getBrowserIndent() != "firefox") {	//Chrome & Safari
			validTarget = event.target instanceof HTMLEmbedElement || event.target instanceof HTMLObjectElement || event.target instanceof HTMLIFrameElement || event.target instanceof HTMLVideoElement || islynda(event);
		}
		else {
			// try {
			// 	validTarget = event.originalTarget instanceof HTMLEmbedElement || event.originalTarget instanceof HTMLObjectElement || event.originalTarget instanceof HTMLIFrameElement || event.originalTarget instanceof HTMLVideoElement ;
			// }
			// catch(ex) {
				validTarget = (event.originalTarget.toString().indexOf("HTMLEmbedElement") != -1) || (event.originalTarget.toString().indexOf("HTMLObjectElement") != -1) || (event.originalTarget.toString().indexOf("HTMLIFrameElement") != -1) || (event.originalTarget.toString().indexOf("HTMLVideoElement") != -1) || islynda(event);
			//}
		}
			
		if (validTarget) {
       		// 233/1397 的 比 例 是 为 了 过 滤 掉 veoh 网 站 的 一 个 高 宽 比 为233/1397 的 flash
			var flash = ISCore.targetObject(event);
			videoURL = document.location.href;
			var condition = false;
			if (videoURL.indexOf("facebook.com") != -1)
				condition = flash.offsetHeight > 180 && flash.offsetWidth > 160 && (flash.offsetHeight / flash.offsetWidth > 255 / 960);
			else 
				condition = flash.offsetHeight > 180 && flash.offsetWidth > 160 && (flash.offsetHeight / flash.offsetWidth > 255 / 960 && flash.offsetHeight / flash.offsetWidth < 1.2)
            if (condition)
			{
            	if (downloadBtnDiv) {
					ISCore.unbind_mouseover(playerDiv111, downloadBtnDiv);
                	ISCore.deleteAttachedButton(downloadBtnDiv);
					playerDiv111 = null;
					downloadBtnDiv = null;
				}

				var invokeURL = "pageUrl=" + videoURL ;
				//if(videoURL.indexOf("nicovideo.jp") != -1)
				{
					invokeURL += "-WS-GUES-";
					invokeURL += "cookies=" + document.cookie ;
				}
				//console.log(invokeURL);
				downloadBtnDiv = ISCore.attachButtonDiv(ISCore.targetObject(event), ISExtensionConfig.getDownloadButtonPosition(), "", ISExtensionConfig.getInvokeProtocol() + ISCore.base64Encode(invokeURL));
				playerDiv111 = ISCore.targetObject(event).parentNode;
				if (ISCore.getBrowserIndent() != "firefox") {
					if (playerDiv111 instanceof HTMLObjectElement || playerDiv111 instanceof HTMLEmbedElement) {
						playerDiv111 = playerDiv111.parentNode;
					}
				}else{
					if ((playerDiv111.toString().indexOf("HTMLObjectElement")!= -1) || (playerDiv111.toString().indexOf("HTMLEmbedElement") != -1)) {
						playerDiv111 = playerDiv111.parentNode;
					}
				}
				ISCore.bind_mouseover(playerDiv111, downloadBtnDiv);
				ISCore.showElement(downloadBtnDiv);
			}
		}
    }
    
    function handleBeforeLoadEvent(event)
    {
	    element = ISCore.targetObject(event);
		try {
			if (isHTML5 == false)
				isHTML5 = (element.toString().indexOf("HTMLVideoElement")!= -1) ;
		}
		catch(ex) {
		}
	    htmlFive(element);
    }

    var url = document.location.href;
    var isHTML5 = false;
	
    if(url.indexOf("vimeo.com") != -1)
    {
        document.addEventListener("beforeload", handleBeforeLoadEvent, true); 
        document.addEventListener("mouseover", handleMouseoverEvent, false);
    }
    else
    {
        document.addEventListener("mouseover", handleMouseoverEvent, false);
    }

})();