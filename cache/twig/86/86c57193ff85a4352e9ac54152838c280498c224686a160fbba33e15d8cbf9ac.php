<?php

/* partials/twFetcher.html.twig */
class __TwigTemplate_128c1e00a15dcc07d4fc2608c3f90859d130bdae0af7ca83956cbdf85746364d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
 /*********************************************************************
 *  #### Twitter Post Fetcher v12.0 ####
 *  Coded by Jason Mayes 2013. A present to all the developers out there.
 *  www.jasonmayes.com
 *  Please keep this disclaimer with my code if you use it. Thanks. :-)
 *  Got feedback or questions, ask here:
 *  http://www.jasonmayes.com/projects/twitterApi/
 *  Github: https://github.com/jasonmayes/Twitter-Post-Fetcher
 *  Updates will be posted to this site.
 *********************************************************************/

var twitterFetcher=function(){function w(a){return a.replace(/<b[^>]*>(.*?)<\\/b>/gi,function(a,f){return f}).replace(/class=\".*?\"|data-query-source=\".*?\"|dir=\".*?\"|rel=\".*?\"/gi,\"\")}function m(a,c){for(var f=[],g=new RegExp(\"(^| )\"+c+\"( |\$)\"),h=a.getElementsByTagName(\"*\"),b=0,k=h.length;b<k;b++)g.test(h[b].className)&&f.push(h[b]);return f}var x=\"\",k=20,y=!0,p=[],s=!1,q=!0,r=!0,t=null,u=!0,z=!0,v=null,A=!0,B=!1;return{fetch:function(a){void 0===a.maxTweets&&(a.maxTweets=20);void 0===a.enableLinks&&
(a.enableLinks=!0);void 0===a.showUser&&(a.showUser=!0);void 0===a.showTime&&(a.showTime=!0);void 0===a.dateFunction&&(a.dateFunction=\"default\");void 0===a.showRetweet&&(a.showRetweet=!0);void 0===a.customCallback&&(a.customCallback=null);void 0===a.showInteraction&&(a.showInteraction=!0);void 0===a.showImages&&(a.showImages=!1);if(s)p.push(a);else{s=!0;x=a.domId;k=a.maxTweets;y=a.enableLinks;r=a.showUser;q=a.showTime;z=a.showRetweet;t=a.dateFunction;v=a.customCallback;A=a.showInteraction;B=a.showImages;
var c=document.createElement(\"script\");c.type=\"text/javascript\";c.src=\"https://cdn.syndication.twimg.com/widgets/timelines/\"+a.id+\"?&lang=\"+(a.lang||\"en\")+\"&callback=twitterFetcher.callback&suppress_response_codes=true&rnd=\"+Math.random();document.getElementsByTagName(\"head\")[0].appendChild(c)}},callback:function(a){var c=document.createElement(\"div\");c.innerHTML=a.body;\"undefined\"===typeof c.getElementsByClassName&&(u=!1);a=[];var f=[],g=[],h=[],b=[],n=[],e=0;if(u)for(c=c.getElementsByClassName(\"tweet\");e<
c.length;){0<c[e].getElementsByClassName(\"retweet-credit\").length?b.push(!0):b.push(!1);if(!b[e]||b[e]&&z)a.push(c[e].getElementsByClassName(\"e-entry-title\")[0]),n.push(c[e].getAttribute(\"data-tweet-id\")),f.push(c[e].getElementsByClassName(\"p-author\")[0]),g.push(c[e].getElementsByClassName(\"dt-updated\")[0]),void 0!==c[e].getElementsByClassName(\"inline-media\")[0]?h.push(c[e].getElementsByClassName(\"inline-media\")[0]):h.push(void 0);e++}else for(c=m(c,\"tweet\");e<c.length;)a.push(m(c[e],\"e-entry-title\")[0]),
n.push(c[e].getAttribute(\"data-tweet-id\")),f.push(m(c[e],\"p-author\")[0]),g.push(m(c[e],\"dt-updated\")[0]),void 0!==m(c[e],\"inline-media\")[0]?h.push(m(c[e],\"inline-media\")[0]):h.push(void 0),0<m(c[e],\"retweet-credit\").length?b.push(!0):b.push(!1),e++;a.length>k&&(a.splice(k,a.length-k),f.splice(k,f.length-k),g.splice(k,g.length-k),b.splice(k,b.length-k),h.splice(k,h.length-k));c=[];e=a.length;for(b=0;b<e;){if(\"string\"!==typeof t){var d=new Date(g[b].getAttribute(\"datetime\").replace(/-/g,\"/\").replace(\"T\",
\" \").split(\"+\")[0]),d=t(d);g[b].setAttribute(\"aria-label\",d);if(a[b].innerText)if(u)g[b].innerText=d;else{var l=document.createElement(\"p\"),C=document.createTextNode(d);l.appendChild(C);l.setAttribute(\"aria-label\",d);g[b]=l}else g[b].textContent=d}d=\"\";y?(r&&(d+='<div class=\"user\">'+w(f[b].innerHTML)+\"</div>\"),d+='<p class=\"tweet\">'+w(a[b].innerHTML)+\"</p>\",q&&(d+='<p class=\"timePosted\">'+g[b].getAttribute(\"aria-label\")+\"</p>\")):a[b].innerText?(r&&(d+='<p class=\"user\">'+f[b].innerText+\"</p>\"),d+=
'<p class=\"tweet\">'+a[b].innerText+\"</p>\",q&&(d+='<p class=\"timePosted\">'+g[b].innerText+\"</p>\")):(r&&(d+='<p class=\"user\">'+f[b].textContent+\"</p>\"),d+='<p class=\"tweet\">'+a[b].textContent+\"</p>\",q&&(d+='<p class=\"timePosted\">'+g[b].textContent+\"</p>\"));A&&(d+='<p class=\"interact\"><a href=\"https://twitter.com/intent/tweet?in_reply_to='+n[b]+'\" class=\"twitter_reply_icon\">Reply</a><a href=\"https://twitter.com/intent/retweet?tweet_id='+n[b]+'\" class=\"twitter_retweet_icon\">Retweet</a><a href=\"https://twitter.com/intent/favorite?tweet_id='+
n[b]+'\" class=\"twitter_fav_icon\">Favorite</a></p>');B&&void 0!==h[b]&&(l=h[b],void 0!==l?(l=l.innerHTML.match(/data-srcset=\"([A-z0-9%_\\.-]+)/i)[0],l=decodeURIComponent(l).split('\"')[1]):l=void 0,d+='<div class=\"media\"><img src=\"'+l+'\" alt=\"Image from tweet\" /></div>');c.push(d);b++}if(null===v){a=c.length;f=0;g=document.getElementById(x);for(h=\"<ul>\";f<a;)h+=\"<li>\"+c[f]+\"</li>\",f++;g.innerHTML=h+\"</ul>\"}else v(c);s=!1;0<p.length&&(twitterFetcher.fetch(p[0]),p.splice(0,1))}}}();

var config1 = {
  \"id\": '";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "id", array());
        echo "',
  \"domId\": '";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "domId", array());
        echo "',
  \"maxTweets\": ";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "maxTweets", array());
        echo ",
  \"enableLinks\": ";
        // line 26
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "enableLinks", array());
        echo ",
  \"showInteraction\": ";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "showInteraction", array());
        echo ",
  \"showImages\": ";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "showImages", array());
        echo ",
  \"showUser\": ";
        // line 29
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "twitter", array()), "showUser", array());
        echo ",
};
twitterFetcher.fetch(config1);
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/twFetcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  19 => 1,);
    }
}
/* <script>*/
/*  /**********************************************************************/
/*  *  #### Twitter Post Fetcher v12.0 ####*/
/*  *  Coded by Jason Mayes 2013. A present to all the developers out there.*/
/*  *  www.jasonmayes.com*/
/*  *  Please keep this disclaimer with my code if you use it. Thanks. :-)*/
/*  *  Got feedback or questions, ask here:*/
/*  *  http://www.jasonmayes.com/projects/twitterApi/*/
/*  *  Github: https://github.com/jasonmayes/Twitter-Post-Fetcher*/
/*  *  Updates will be posted to this site.*/
/*  *********************************************************************//* */
/* */
/* var twitterFetcher=function(){function w(a){return a.replace(/<b[^>]*>(.*?)<\/b>/gi,function(a,f){return f}).replace(/class=".*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function m(a,c){for(var f=[],g=new RegExp("(^| )"+c+"( |$)"),h=a.getElementsByTagName("*"),b=0,k=h.length;b<k;b++)g.test(h[b].className)&&f.push(h[b]);return f}var x="",k=20,y=!0,p=[],s=!1,q=!0,r=!0,t=null,u=!0,z=!0,v=null,A=!0,B=!1;return{fetch:function(a){void 0===a.maxTweets&&(a.maxTweets=20);void 0===a.enableLinks&&*/
/* (a.enableLinks=!0);void 0===a.showUser&&(a.showUser=!0);void 0===a.showTime&&(a.showTime=!0);void 0===a.dateFunction&&(a.dateFunction="default");void 0===a.showRetweet&&(a.showRetweet=!0);void 0===a.customCallback&&(a.customCallback=null);void 0===a.showInteraction&&(a.showInteraction=!0);void 0===a.showImages&&(a.showImages=!1);if(s)p.push(a);else{s=!0;x=a.domId;k=a.maxTweets;y=a.enableLinks;r=a.showUser;q=a.showTime;z=a.showRetweet;t=a.dateFunction;v=a.customCallback;A=a.showInteraction;B=a.showImages;*/
/* var c=document.createElement("script");c.type="text/javascript";c.src="https://cdn.syndication.twimg.com/widgets/timelines/"+a.id+"?&lang="+(a.lang||"en")+"&callback=twitterFetcher.callback&suppress_response_codes=true&rnd="+Math.random();document.getElementsByTagName("head")[0].appendChild(c)}},callback:function(a){var c=document.createElement("div");c.innerHTML=a.body;"undefined"===typeof c.getElementsByClassName&&(u=!1);a=[];var f=[],g=[],h=[],b=[],n=[],e=0;if(u)for(c=c.getElementsByClassName("tweet");e<*/
/* c.length;){0<c[e].getElementsByClassName("retweet-credit").length?b.push(!0):b.push(!1);if(!b[e]||b[e]&&z)a.push(c[e].getElementsByClassName("e-entry-title")[0]),n.push(c[e].getAttribute("data-tweet-id")),f.push(c[e].getElementsByClassName("p-author")[0]),g.push(c[e].getElementsByClassName("dt-updated")[0]),void 0!==c[e].getElementsByClassName("inline-media")[0]?h.push(c[e].getElementsByClassName("inline-media")[0]):h.push(void 0);e++}else for(c=m(c,"tweet");e<c.length;)a.push(m(c[e],"e-entry-title")[0]),*/
/* n.push(c[e].getAttribute("data-tweet-id")),f.push(m(c[e],"p-author")[0]),g.push(m(c[e],"dt-updated")[0]),void 0!==m(c[e],"inline-media")[0]?h.push(m(c[e],"inline-media")[0]):h.push(void 0),0<m(c[e],"retweet-credit").length?b.push(!0):b.push(!1),e++;a.length>k&&(a.splice(k,a.length-k),f.splice(k,f.length-k),g.splice(k,g.length-k),b.splice(k,b.length-k),h.splice(k,h.length-k));c=[];e=a.length;for(b=0;b<e;){if("string"!==typeof t){var d=new Date(g[b].getAttribute("datetime").replace(/-/g,"/").replace("T",*/
/* " ").split("+")[0]),d=t(d);g[b].setAttribute("aria-label",d);if(a[b].innerText)if(u)g[b].innerText=d;else{var l=document.createElement("p"),C=document.createTextNode(d);l.appendChild(C);l.setAttribute("aria-label",d);g[b]=l}else g[b].textContent=d}d="";y?(r&&(d+='<div class="user">'+w(f[b].innerHTML)+"</div>"),d+='<p class="tweet">'+w(a[b].innerHTML)+"</p>",q&&(d+='<p class="timePosted">'+g[b].getAttribute("aria-label")+"</p>")):a[b].innerText?(r&&(d+='<p class="user">'+f[b].innerText+"</p>"),d+=*/
/* '<p class="tweet">'+a[b].innerText+"</p>",q&&(d+='<p class="timePosted">'+g[b].innerText+"</p>")):(r&&(d+='<p class="user">'+f[b].textContent+"</p>"),d+='<p class="tweet">'+a[b].textContent+"</p>",q&&(d+='<p class="timePosted">'+g[b].textContent+"</p>"));A&&(d+='<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to='+n[b]+'" class="twitter_reply_icon">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id='+n[b]+'" class="twitter_retweet_icon">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id='+*/
/* n[b]+'" class="twitter_fav_icon">Favorite</a></p>');B&&void 0!==h[b]&&(l=h[b],void 0!==l?(l=l.innerHTML.match(/data-srcset="([A-z0-9%_\.-]+)/i)[0],l=decodeURIComponent(l).split('"')[1]):l=void 0,d+='<div class="media"><img src="'+l+'" alt="Image from tweet" /></div>');c.push(d);b++}if(null===v){a=c.length;f=0;g=document.getElementById(x);for(h="<ul>";f<a;)h+="<li>"+c[f]+"</li>",f++;g.innerHTML=h+"</ul>"}else v(c);s=!1;0<p.length&&(twitterFetcher.fetch(p[0]),p.splice(0,1))}}}();*/
/* */
/* var config1 = {*/
/*   "id": '{{ site.twitter.id }}',*/
/*   "domId": '{{ site.twitter.domId }}',*/
/*   "maxTweets": {{ site.twitter.maxTweets }},*/
/*   "enableLinks": {{ site.twitter.enableLinks }},*/
/*   "showInteraction": {{ site.twitter.showInteraction }},*/
/*   "showImages": {{ site.twitter.showImages }},*/
/*   "showUser": {{ site.twitter.showUser }},*/
/* };*/
/* twitterFetcher.fetch(config1);*/
/* </script>*/
/* */
