WebFontConfig = {
  google: { families: [ 'Lato:400,700,300:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// Initialize Share-Buttons
$.contactButtons({
  effect  : 'slide-on-scroll',
  buttons : {
    'facebook':   { class: 'facebook', use: true, link: 'https://www.facebook.com/', extras: 'target="_blank"' },
	'twitter':   { class: 'twitter', use: true, link: 'https://twitter.com/', extras: 'target="_blank"'  },
    'youtube':     { class: 'youtube',  use: true, link: 'https://www.youtube.com/channel/UCCeX7fQ_KwW2AfU7TJX2ERQ/', extras: 'target="_blank"'   },
	'whatsapp':     { class: 'whatsapp',  use: true, link: 'https://api.whatsapp.com/send?phone=9425230437&forceIntent=true&load=loadInIOSExternalSafari', extras: 'target="_blank"'   },
    
    
  }
});