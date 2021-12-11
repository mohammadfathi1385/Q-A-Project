
if(window.top!==window.self)window.top.location=window.self.location;

var Bot_ha = '(Googlebot|bingbot|ia_archiver|MJ12bot|Yandex|Yahoo! Slurp|Ezooms|InternetSeer|wortschatz.uni-leipzig.de|ahrefs.com|Exabot|MSNBot|parsijoo|DotBot|yooz|SMTBot|Mail.RU_Bot|yacybot|duckduckgo|bingpreview|googlecode.com|Google favicon)';
var Aya_Bot=new RegExp(Bot_ha,'i');
var UserAgent=navigator.userAgent;
if(!Aya_Bot.test(UserAgent))document.write('<link href="/monitor.php?w='+screen.width+'&h='+screen.height+'&x='+document.documentElement.offsetWidth+'" rel="stylesheet" type="text/css" media="all">'+'<style><!-- #kalamat_kelidi_makhfi{display:none;} #tablighat{display:block;} --></style>');
