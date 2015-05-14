// ���״���
var urlParams;
var platDir = 'LTR';
(window.onpopstate = function () {
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);
})();


if (typeof(urlParams.lang) == "undefined")
    platformLang= "cn";
else{
    platformLang = urlParams.lang;
    if(urlParams.lang == "ar" || urlParams.lang == "he")
         platDir = 'RTL';
}

SO.load({
    lang : platformLang,
     dir: platDir,
    cookieOptions : {
        domain : '.platform.com'
    },
    packages : {
        RegularPlatform : {
            settings : {
                selector : '#so_container'
            }
        },
        Clock : {},
        Balance : {}
    }
});