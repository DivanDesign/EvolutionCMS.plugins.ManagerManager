
<!-- saved from url=(0071)http://phpthumb.sourceforge.net/index.php?source=phpthumb.functions.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">/*.lleo_errorSelection *::-moz-selection,
.lleo_errorSelection *::selection,
.lleo_errorSelection *::-webkit-selection {
    background-color: red !important;
    color: #fff !important;;
}*/

#lleo_dialog,
#lleo_dialog * {
    color: #000 !important;
    font: normal 13px Arial, Helvetica !important;
    line-height: 15px !important;
    margin: 0 !important;
	padding: 0 !important;
	background: none !important;
	border: none 0 !important;
	position: static !important;
	vertical-align: baseline !important;
	overflow: visible !important;
	width: auto !important;
	height: auto !important;
    max-width: none !important;
    max-height: none !important;
	float: none !important;
	visibility: visible !important;
	text-align: left !important;
    text-transform: none !important;
	border-collapse: separate !important;
	border-spacing: 2px !important;
    box-sizing: content-box !important;
    box-shadow: none !important;
    opacity: 1 !important;
    text-shadow: none !important;
    letter-spacing: normal !important;
    -webkit-filter: none !important;
    -moz-filter: none !important;
    filter: none !important;
}
#lleo_dialog *:before,
#lleo_dialog *:after {
    content: '';
}

#lleo_dialog iframe {
	height: 0 !important;
	width: 0 !important;
}

#lleo_dialog {
    position: absolute !important;
    background: #fff !important;
    border: solid 1px #ccc !important;
    padding: 7px 0 0 !important;
    left: -999px;
    top: -999px;
    width: 440px !important;
    overflow: hidden;
    display: block !important;
    z-index: 999999999 !important;
    box-shadow: 8px 16px 30px rgba(0, 0, 0, 0.16) !important;
    border-radius: 3px !important;
    opacity: 0 !important;
    -webkit-transform: translateY(15px);
    -moz-transform: translateY(15px);
    -ms-transform: translateY(15px);
    -o-transform: translateY(15px);
    transform: translateY(15px);
}
#lleo_dialog.lleo_show_small {
    width: 150px !important;
}
#lleo_dialog.lleo_show {
    opacity: 1 !important;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition: -webkit-transform 0.3s, opacity 0.3s !important;
    -moz-transition: -moz-transform 0.3s, opacity 0.3s !important;
    -ms-transition: -ms-transform 0.3s, opacity 0.3s !important;
    -o-transition: -o-transform 0.3s, opacity 0.3s !important;
    transition: transform 0.3s, opacity 0.3s !important;
}
#lleo_dialog.lleo_collapse {
    opacity: 0 !important;
    -webkit-transform: scale(0.25, 0.1) translate(-550px, 100px);
    -moz-transform: scale(0.25, 0.1) translate(-550px, 100px);
    -ms-transform: scale(0.25, 0.1) translate(-550px, 100px);
    -o-transform: scale(0.25, 0.1) translate(-550px, 100px);
    transform: scale(0.25, 0.1) translate(-550px, 100px);
    -webkit-transition: -webkit-transform 0.4s, opacity 0.4s !important;
    -moz-transition: -moz-transform 0.4s, opacity 0.4s !important;
    -ms-transition: -ms-transform 0.4s, opacity 0.4s !important;
    -o-transition: -o-transform 0.4s, opacity 0.4s !important;
    transition: transform 0.4s, opacity 0.4s !important;
}
#lleo_dialog input::-webkit-input-placeholder {
    color: #aaa !important;
}
#lleo_dialog .lleo_has_pic #lleo_word {
	margin-right: 80px !important;
}
#lleo_dialog #lleo_translationsContainer1 {
	position: relative !important;
}
#lleo_dialog #lleo_translationsContainer2 {
	padding: 7px 0 0 !important;
	vertical-align: middle !important;
}
#lleo_dialog #lleo_word {
    color: #000 !important;
    margin: 0 5px 2px 0 !important;
    /*float: left !important;*/
}
#lleo_dialog .lleo_has_sound #lleo_word {
    margin-left: 30px !important;
}
#lleo_dialog #lleo_text {
    font-weight: bold !important;
    color: #d56e00 !important;
    text-decoration: none !important;
    cursor: default !important;
}
/*
#lleo_dialog #lleo_text.lleo_known {
    cursor: pointer !important;
    text-decoration: underline !important;
}
*/
/*#lleo_dialog #lleo_closeBtn {
    position: absolute !important;
    right: 6px !important;
    top: 5px !important;
    line-height: 1px !important;
    text-decoration: none !important;
    font-weight: bold !important;
    font-size: 0 !important;
    color: #aaa !important;
    display: block !important;
	z-index: 9999999999 !important;
	width: 7px !important;
	height: 7px !important;
	padding: 0 !important;
	margin: 0 !important;
}*/

#lleo_dialog #lleo_optionsBtn {
    position: absolute !important; 
    right: 3px !important;
    top: 5px !important;
    line-height: 1px !important;
    text-decoration: none !important;
    font-weight: bold !important;
    font-size: 13px !important;
    color: #aaa !important;
    padding: 2px !important;
	display: none;
}
    #lleo_dialog.lleo_optionsShown #lleo_optionsBtn {
        display: block !important;
    }
    #lleo_dialog #lleo_optionsBtn img {
        width: 12px !important;
        height: 12px !important;
    }
#lleo_dialog #lleo_sound {
    float: left !important;
    width: 16px !important;
    height: 16px !important;
    margin-left: 9px !important;
    margin-right: 3px !important;
    background: 0 0 no-repeat !important;
    cursor: pointer !important;
    display: none !important;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfNJREFUeNq0U01IVFEU/u57Oo5WhBRIBBptykWLYBa2soWiEKQQEbrSFsGbVRQKQc2iFqGitXqvjQxCoCJCqyI0aBUtZILaJNUuYWYWo8HovJ/707nP94bnz0rxwvfOuefd8517fi5TSuE4i50YwZ3l37ZhNlpgzFkaaM/G9sHF1YskNrT+7l4PjMOcb78t2JL71uxgB+2UlfxHTtq5N94fIOh/88kWgWfl73ZCSQkpeGg3H091JY6dI2S00qA/N3KO3dDUYhFgEmZGurG+w9FqApIHsVM7kaTF9Nhn0r8Q7hPWQgIRuNaH3AMUA4W/Lkdh04cpFS43G0TgxQTvCdMETVAk3KynIHwXZU/ge8XDt7KH9bKLjU0P2zVO5LsEpSejVRJ9UR18EtfqKegovs9R3Q6w9c/H1o4Aa2Jwm1lIvn9RJ4w9RdRRzqcYrpwycCll4Cy1lnkS3Bc6vfBg28v8aRIfI78zhB/1GygROH3jLyyzMQ0zlUZuZBSlKkeLoegGtTjYLcJ8pF+NakHOFC2J6w+f25mxSfWrWFF/ShXVPTGvtN14NNkVnxlYWJkgZEL7/vwKr55lKSVnaGYWkuYgrgG172uUv47+U7fw0EHaJXmalUQy/HqO6lBzEsVjJC4Q8kd6TETQpjuaGOvjv8b/AgwA/ij1XMx58NIAAAAASUVORK5CYII=) !important;
}
#lleo_dialog .lleo_has_sound #lleo_sound {
    display: block !important;
}

#lleo_dialog #lleo_soundWave {
    border: solid 5px #4495CC !important;
    border-radius: 5px !important;
    position: absolute !important;
    left: -5px !important;
    top: -5px !important;
    right: -5px !important;
    bottom: -5px !important;
    z-index: 0 !important;
    opacity: 0.9 !important;
    display: none !important;
}
    #lleo_dialog #lleo_soundWave.lleo_beforePlaying {
        display: block !important;
    }
    #lleo_dialog #lleo_soundWave.lleo_playing {
        opacity: 0 !important;
        border-width: 20px !important;
        border-radius: 30px !important;

        -webkit-transform: scale(1.07,1.1) !important;
        -moz-transform: scale(1.07,1.1) !important;
        -ms-transform: scale(1.07,1.1) !important;
        transform: scale(1.07,1.1) !important;

        -webkit-transition: all 0.6s !important;
        -moz-transition: all 0.6s !important;
        -ms-transition: all 0.6s !important;
        transition: all 0.6s !important;
    }


#lleo_dialog #lleo_picOuter {
    position: absolute !important;
    float: right !important;
    top: 4px;
    right: 5px;
    z-index: 9 !important;
    display: none !important;
    width: 100px !important;
}
    #lleo_dialog.lleo_optionsShown #lleo_picOuter {
        right: 25px;
    }
#lleo_dialog .lleo_has_pic #lleo_picOuter {
    display: block !important;
}
    #lleo_dialog #lleo_picOuter:hover {
        width: auto !important;
        z-index: 11 !important;
    }
#lleo_dialog #lleo_pic,
#lleo_dialog #lleo_picBig {
    position: absolute !important;
    top: 0 !important;
    right: 0 !important;
    border: solid 2px #fff !important;
    -webkit-border-radius: 2px !important;
    -moz-border-radius: 2px !important;
	border-radius: 2px !important;
    z-index: 1 !important;
}
#lleo_dialog #lleo_pic {
	position: relative !important;
    border: none !important;
	width: 30px !important;
}
#lleo_dialog #lleo_picBig {
    box-shadow: -1px 2px 4px rgba(0,0,0,0.3);
    z-index: 2 !important;
    opacity: 0 !important;
    visibility: hidden !important;
}
    #lleo_dialog #lleo_picOuter:hover #lleo_picBig {
        visibility: visible !important;
        opacity: 1 !important;
        -webkit-transition: opacity 0.3s !important;
        -webkit-transition-delay: 0.3s !important;
    }
#lleo_dialog #lleo_transcription {
    margin: 0 80px 4px 31px !important;
    color: #aaaaaa !important;
}
#lleo_dialog .lleo_no_trans {
    color: #aaa !important;
}

#lleo_dialog .ll-translation-counter {
	float: right !important;
    font-size: 11px !important;
    color: #aaa !important;
    padding: 2px 2px 1px 10px !important;
}

#lleo_dialog .ll-translation-text {
	float: left !important;
	/*width: 80% !important;*/
}

#lleo_dialog #lleo_trans a {
    color: #3F669F !important;
    text-decoration: none !important;
    text-overflow: ellipsis !important;
    padding: 1px 4px !important;
    overflow: hidden !important;
    float: left !important;
    width: 320px !important;
}

#lleo_dialog .ll-translation-item {
    color: #3F669F !important;
    border: solid 1px #fff !important;
    padding: 3px !important;
    width: 100% !important;
    float: left !important;
	-moz-border-radius: 2px !important;
	-webkit-border-radius: 2px !important;
	border-radius: 2px !important;
}

#lleo_dialog .ll-translation-item:hover {
	border: solid 1px #9FC2C9 !important;
    background: #EDF4F6 !important;
	cursor: pointer !important;
}
#lleo_dialog .ll-translation-item:hover .ll-translation-counter {
	color: #83a0a6 !important;
}

#lleo_dialog .ll-translation-marker {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAWSURBVBhXY7RPm/+fAQkwIXNAbMICAJQ8AkvqWg/SAAAAAElFTkSuQmCC) !important;
    display: inline-block !important;
    width: 4px !important;
    height: 4px !important;
    margin: 7px 5px 2px 2px !important;
    float: left !important;
}

#lleo_dialog #lleo_icons {
    color: #aaa !important;
    font-size: 11px !important;
    background: #f8f8f8 !important;
    padding: 10px 10px 10px 16px !important;
}
#lleo_icons a {
    display: inline-block !important;
    width: 16px !important;
    height: 16px !important;
    margin: 0 10px -4px 3px !important;
    text-decoration: none !important;
    opacity: 0.5 !important;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAAQCAYAAADK4SssAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADopJREFUeNqsWQt0lNWd/33fzGQemUcmzwkhSkhYSSgpJJGVWHlEVEwLq0AFhC520xN0cfcUkHZ7QNetwfac6mp3oR5Ss8c9XaPVhoJCtGwSkYQglQBBNg/IgxBIQl7zyCSZ97f/e7+ZyeShpu7eM/fc797vu9/j/u7v93+MUqlUwuv1IlQ6Ojqk7u5utLaWo/nanfB45tbnsSI6GgsXLhQwpcx/9rCE/0PpOLSL39Pnh9TY2Y1NJXW4NeTFz59agp9uXASfYwR/Xv9dxJ6pxwJBhCIQoKtFuIUAXPRksyTx+U2rVy0TtdrywNhYeviFJAlSsJ1oJNY2ZdfVLeKdiGIb96Kqw45LvU40Dbj42F2mKNyXasCjGTGI0aqmvr6wdseL075fEORl6h+yYWzcDaNeh8Q4E7z0kVPLx//5Il0uTLqHQqGA3z/92qioKHg8Hn5/SZqYogwdOBwO6d19+9DQ0ADdqrmTJhesLML6nQ38uLj4jHSkuJi/a+Q1vd8QxORg6/dBUtDblLzbhBuuOIhJcfhl5QCeyB9DusWA3MO/hf2+e6FwjtFHKGj15Y8M0Cd0KQTpbr8kCBrNsaTn9iXoH3jga5/739nZC7Mj+n7aHBVNwwSUEhuy4rCR6m8vD9ID5MVyeAI4cPo2suI0KMpJgEoU+A5QiCKmg0jT6H49/cP4Tt4i/FXaHLS0d6O57RZ0WvXXvltaWhpOnz7NCbZ371588MEHHLQ9e/bwev78eTzzzDPo7+8PzxFDIO4rKOAgomHihq+9ckxgdd26dWHQSkuBvJ2lmLqTv2kJbQAGot/nw9U7xDa9CQHakY5xFd45f4OdhWZhFtz534GP9k9A9PPWIxGgAu2AgHwP79hYYseRI8q+f/832Kqr4O7t5bt6pioFAmIkiJXXrbCYtbg85MF1q5vv+IFxH6KUApSizLDsJB09F2i3yozoc3pn/CaBVKPr9gC+X3g/3ih5GruL1mPPjx7DwLCdA/x1xWKx4K677kJ6ejpWr14dHt+xYwdSUlKQl5cHvV4/aQ7/GMZEDiDVI9IF4asecqQ4FwzvnaWl/x84hhnJwFAKSiTFaCDS7ifhhEjMu9pJS0dg0SH8Bh28BKqCXSuRxAp+ApMAFBX8Hj6PR3G+uhrDFRXoeekltG3ZjOsbN6L7wH4M/O53GKEX97pc8NGGCckSW9ibdg9anBJqu0ZgpFvNM0ahf8yH75GU7siOx3aqIjHQS8+N0SiRGa/BhR4nLHpVhBSKfEN03erHny+3IinehBf+cQuqzzby8+1dfURuKSy5X1UMBkP4eM6cOfxdmdQuWrSIj7nd7mlAKquqqqTyVXtnvfCFhUkoRi4xswG7V7RIM9lMVvJJHoryM7Gr4hxcLisfO7m3EIcrm1HZ3DmNkYIo79RHFsfjbHMvlGozLTKBKSpJPhUQ3WRvmlpwO1mE1WCGygMk2pxIcHjhlfzBzSDbQ2Jb2C56Bwfhra2F40wtFxHRaMK899+nU/LzGGAvnR+ARSUTNDVaBTVRMI6AO3VjhMCRkGPRUQusutuABbFqDsaJ63akmtQEZhSf5xx1wWTU4eBPfoDBYQeSE818fOV9i/HZpVYcPPQeLPHmWQGZmJgYPmasZGXt2rUcTFaiyVeJBJszMgxi7uxZxFjJrn/tzBnef5MA6iwp4uCFyrjVhieXp6H5wIYw61ip2FUIjcYc7oeO227a2DKjeG0GFib74LPZoVf58NTKuSSiAkr/9CaeeMSFFQeWYsOPv4XCvVl44GdLsbVoMU5mmcLsCrUBWnneRlYa81qHJzHy983UJzBvOTy8ppvV/Nz+2j581GwjGZav27AwBp/dHsUgXcuY1TLgxns0N/y9LjdMhmisJuD+dkMB1j24jJ7jx5vvnsLT+98gJ8cHg147q/XNysoCcziHhoY4C1NTU7F582Y0NjZikDZmXFzcdGkt6f8IxReO/KWKKDAsS4P29EDZOVhJsqqDgC6NMeOSzQrzc+Uhr5SDvPHwOd4/vHF5WFYL0mL48fee/wBHP2lGkl6Dcy+vwVu70nHhYB7WLJmDX/ypFDsbf42erBTZmwPRkfTVRTJXnx2Ln27PnQCSFpm1UhA8KeDnAPI2OM6cCCnoxLzfYkP3qA/dTh/ujPuxxKJF7e0x1BIbB91+LErUYoDA23rsBk5ccyCRGHu224meMT+fGyrxsUb09VtBHiyy1/4DOm7ewcjoOF58vRz6aDUSyGP1zeCxzlSYnLa3t8NqtUKtVnM2LliwALWkLIyJbA00Gs1kaaVJQjD8mOa87H7uMT722LrdMzyOFq9BRrKPQMspeZsDU09AHn1ug7yLXzmKtANlKNtWyEF+tvwcHny1kh8XZBbBQvawzya7+MMuLX7063r85vhlFORasH/7CtouEk5f/xzPf/IykJFI8ubjVl3wqYJSSrbTEwi/ul+SJTUEaESowVuOHXUiGXnJ6oVRLTP50XkGREcp8M41GzpcPjycZICOJPdfzvXhf0a8+GGWnhwfAUdJVtvo/IhnAphAQOJ2Uh2lQrROgzlJsQRmHwFsQrRWQ8wOzJoljG03b97kjMzIyMDWrVu5XaypqcGWLVsQGxsLo9E43dmZzY1n64Ey4Ha9XcP7DFAG4qGT5/BqzSUcenI5Dm3L5+dqyA4yUPPpelZiFR7oozSov+7Cq+XXcKN/lBZbgfmxKchIzyEL74JIjqboVxIkBCAtnAAVj4Ek0SMvZnCxQrLqj6wRUhsJJK097rj8vK4hG+ghKX2fgGL9VanRXEb/i5jH+o/ON5LDI6G8Ve6LX2LuEgg8jVqFnjvD8Hh9s7KLkxzA5GR88cUXOH78OO8zz5W998mTJ9HZ2Ul+g8jlNfK+XwlkKPzIzc2d4U0aJtlVJqche8ecmRCgBZnJxNInZfDoJTItMSSxlSh6uxL1nRNOj9c2iLlaN9bnxeMHaxfC5qAQgZ6aGpeMs1tK8XD8CkhjTlpYGiSAA4LMQ84yr2qatPpD8uqPlFm55dIaBHLzPSZIPgksuls334CaW04MkcyKBOg6Au6znjH0EBtTSMbvn6NDzQ0HOUh+PofNjSzs3g7nOCwJsrnout0fTkR8qY2aAWSz2Qyn0ymHg8HS3NzMEwHDw8Nhh2fGhMBfUljcyexjcQSQjH0hqXz7Inmml3oJOBsHtDAzDYe3FfDz5ec6Z/RaS/YU4KHcxYgzi/DZmzA8dAZdl3uQnLEJ8YYEnNj0Ov7mvT34uLcaUhTJip88WWJWIKAIpyZC3ioHjR1JEZmdCImNZGTx4jiUXbWjMM0IA8lqxXUHD+hXpuoRr1Xil239fLGfINBEan9P7BQ4FQU+V3aOJc4+pVKBzu4+PLWpgI9/WPM5OTi6aVmYyDJ1XKvVchvIWNfa2gqbzYaYmBhcvHiRn3e5XOHMzyQb+U2A3PfudU7I3btXhMeYPczJSkOaRYNtOZnYW7A0bP8YsCWVsrQeICbOFEduLfg2nIONuHz8aZhxBUrVGJRuEZ3XDiHlwT/CGJuOfy3Yi7r/uIIRkmGFjxYnwLIItKi+CSC5LQy24TWakqbjqa/gcS45M0uTNBwoJpvH2x3cS348w8gX+Xib3P/+PTFw+wI41j7C+0voO9lcbt/tTjz+yHIUrs6Fj+59b/YCUpRR2Kk6yeFhVU92U6OO4naUybXb4+XjLHUXWZhkqlQqDhh7z7a2Np4AuHr1aohE4ViTpVfZpvxGQL5UeYfHkCxLFxlDMi/1Ur0cLx44Ws9ldlvOBLAhtvZ+SWbHHRhFa/VOpBvPw2RmwTUF/14JmsEm9NfthmH9CdwTfzcs0YkYcXXCz9ItBKKKHB+fT86weP3+PkLMEo4jg6yMBDEEZIgJbOdXbUjD65eHUHumD0PjPs7wJqsb/1TXh3aKU1MMKiwjb/bDNjtsJKkatYC3Hkrhc/kmXrscP3tmEy43dWJJlhyCMafnk3cO4sKVNlTXX+FMHbQ64HJ7OaCW+Bjk52by8cgyb948XkdGRnifAUjrzG0jT3oEgWN2NDIXq4w0ebMpDMTcXBZLFn9lnpUlAcoigC3Kz+GMZACHEgSRcaTH3g+97xY0qhiMkI0SfGQH6T112lj4XbcheEcxLkbD5RylhVaRrEaRnfSSp+oPhxIdbvezGqWyjEAyRUrWVCBd4+PSRbf79KaQTSL79/cUxtxf0SknSlmsfMUatmHLLDouq0eJrfPj1PjNymSYVBPuhdmkD4cgpz+7ircqqqEimd3+2Cqs/OtvIS87I3zt6JiLJxkYCMyeNkaYGZ5YINtYVVUVls6ysjJuGxn7WDl16hQHmkkua0MAh4H8lb0G+0wFM4PX0BBeBQZiza+2TEqaJ0eAGQpBJuUOYyZinpzkGHJyrNOeoY2ZB3XCGowOV0Cp0/HQQylEwT+ugHrOOrKLenz4+cfosfdCMJDdYZkZryh7qpKcXdnZ1VXBcg4/TkwUF2k0+00KxaNmhSJPIQiT/rLoaGv7/BeDgw+9HDGWpFOh5ckM/KFjBD+pv4MeZ5C19BOVMmiPLzDhlRXJaOwdxVxj9IR/8FE9zl9q5Uy7eq0LNvsoHz97oYXCEDOSE8xIosrklaX6HCNj6O4d4uHJ1MKcmhdeeAF2u5336+rqOOgh23jixAlcuXJlGiOFqX9jsfLpp59Kxz58jXutISCZB7Vq6WZsvdc0499Y1iDTmPe6sYAko09+cC8Ftb29cuBcUrQcyVoz8l+ZsJNmmhP+G2t0SLI1vg6l/QuI3jEEVBqoLQ9DsbgILT19+O4bu3BLHKDFoLCA7SOJZEZSQTpY86X+/TK9XvmEyfR30aK4MUWjyffpdM4NjY2RyaZpXgizsSPeAKxuOZwxq0Wyj360DpFtpsvvm6sPyypbwzXbn5eYTWS206jXUhCv4gLA7sOk1OX2kE1kGaEAv4Y5RVq6RqtR8+OP3vrnaX9jRXq1kvT1/0/8rwADAJ+LRelLmVNwAAAAAElFTkSuQmCC) !important;
}
#lleo_icons a:hover {
    opacity: 1 !important;
}
#lleo_icons a.lleo_google     {background-position:-34px 0 !important;}
#lleo_icons a.lleo_multitran  {background-position:-64px 0 !important;}
#lleo_icons a.lleo_lingvo     {background-position:-51px 0 !important; width: 12px !important;}
#lleo_icons a.lleo_dict       {background-position:-17px 0 !important;}
#lleo_icons a.lleo_linguee    {background-position:-81px 0 !important;}
#lleo_icons a.lleo_michaelis  {background-position:-98px 0 !important;}

#lleo_dialog #lleo_contextContainer {
    margin: 0 !important;
    padding: 3px 15px 8px 10px !important;
    background: #eee !important;
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee)) !important;
    background: -moz-linear-gradient(-90deg, #fff, #eee) !important;
    border-bottom: solid 1px #ddd !important;
    border-top-left-radius: 3px !important;
    border-top-right-radius: 3px !important;
    display: none !important;
    overflow: hidden !important;
}
#lleo_dialog .lleo_has_context #lleo_contextContainer {
    display: block !important;
}
#lleo_dialog #lleo_context {
    color: #444 !important;
    text-shadow: 1px 1px 0 #f4f4f4 !important;
    line-height: 12px !important;
    font-size: 11px !important;
    margin-left: 2px !important;
}
#lleo_dialog #lleo_context b {
    line-height: 12px !important;
    color: #000 !important;
    font-weight: bold !important;
    font-size: 11px !important;
}
/*#lleo_dialog #lleo_gBrand {
    color: #aaa !important;
    font-size: 10px !important;
    *//*padding-right: 52px !important;*//*
    padding-bottom: 14px !important;
    margin: -3px 4px 0 4px !important;
    background: left bottom url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAPCAYAAABJGff8AAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAcVSURBVHja3FZrbFTHFT4z97W++/KatfHGNrFjMNjFLQ24iiVIFBzCD1SFqj/aRlCUCvjRKlVatUFJVJJGNKUtoRVqgZZWKWCVOEqKQxsaUoypaWzclNgGI9sLtndZv9beh/d133ems3ZAvKTGkfqnZ3U1d++9M+d88535zkGUUsjbpl/PgixiEEz05aHLIzsjo9cwIrrEy4EA7ypLm8rMAX2q850cYGMtmoD3tKOgYwF0QDAUjcFwwoLG33ih5hkZIJwFGjMA8QDRaQuCIzb0ZtbCMe00oCRbwUIwU7EHwo4jYFs6VASWPb3cv+yP7SfO9RCNNFIByLMpB+ybKIRoLgeXZhKweYrAfzP+1h3CABY90n/unafCwSs/xJK7BfMOzVZjq2w92WJlbhyzLeWSyXuCTXgMOKDsh2Dhlp9HoF57DdzTX4H4kteh5iHtzcRo8ph9XQ+DwZFGJME+RQYq5b/99HYLjNch7gi2t35roOONNQX+mh4kF7GnGDjnA70sgCe0eG+tIlcGX3F0wwtSN+gqBwJGvEXBumdVti9ImB/vNcT2DQHBGriMBkh17QZH7dFCgetBbIcywOa9Cm4QecSYx3dsV3Nz8x3Ytm7dio4fP063bNmC4HZ3BWrqpyN950d5qaDHVqeA2gZw8mLgRA9YBCKGDR+8zF2E3eg8AOdoCFuo+YpitswiboAFtwvNb/qcaTmy5+qg3XwjQi7YBLUjBCXsmmMSIbrZUJKHBWr2muZYRyo0vSfWV+YkyMx/YTTZPDyBCh68QeAP/ap5WuX4fobrsZvB3z7mgdyXmeRUvEjTjE5O8gIlBmDRC2LRKigp8QClOSguRfCj0PcZatejHYb455ORxPZaEf5azaOXRET3ahQWUQk9r+fMjgOHVFvg6FN11dhbGYB+SuBaVud8HhHvGx88tT6RMp6JzXxhmZ6OrqfGwC98KyZT0excfPqLgs8R5jwdhyMTr22Q8W+9Dn4kTLi/s3fi3RzfZOa2hJi3gZCKBLnIxzmK2Mb7GRgPEGqBIIpQXl4OevVGeEt+EqDI/7v3QxPaoGa38hxn1RRwP17sdk/lOP67KpiPDX6YXXuxj758I4rSdVUQKSuGnU4ZPMkk3u3Skjsmr3V/bKszPQW+qiZPcSWxcvHtlpJJ2wyLm6DMGm9g54V4ungltj+u9chHuhRytU0hz88Rz8Qqn1J3j/cwkzF4Q3AvedhWoiyneeCdFWy2hU1d28YU5nFJkMUDeN17681gqUPJqH6OvRYlKA34wXR5O1EytDkXy2xi5wgFSpDM0p2RiMBVAmcWpYAmppOrr03FbVxY2+T2+WFJpQ/S4YgWSV8PIsEp2jr7HsAmNl7m0BVp2rbrT0TTb4YNu83xKXXmFjPsjJzmPVUyO/B7BV8dcAV+luGUnwr1jWcS0Wh8bORryvC7Femh/qElmCwu5ZHopDZjTgC5QMJjBNRYkrQWOimw1Pp6KdMP4mCIy0QlqWM6Ebp+fna8+3uUcwcKS1e0SJA7ef1fred8n1NfKFwqFCMm12lKudDw8PulShbnCC0ux7TtG4US7PDghYGxlcltQEiMd5bt4pyB/VhwA5aKDW9p/QfVdStPg5mBYZ1a/0yYO/xg05US6lhOdNlOxus+ikw29s5mfjadQJ1ZBf5dXQFbH6lHG3wcOIwkPnyqjUYsPXvI70dviCKDL8o0MtS/WbeLXi1cvdrSxLTTMgykPcDV/bwq027o6vgKgdtbJ6L9tRK31oXhyQVJM2MmTW2tiuiJvyB1+jvUSD+NJX+fDtLkR13dZZNXT13NYv5iO//g5U1a/7o4gV8FLTgRiqu5M+nULpuQoyYTpFSWNiTT8HtVh59Ajx0cGNazlwfg8/rqXyqLH9pW4ghNfns2HiWZWNx2V6zqivWHvho50zKk902eRYQzTnwRL60ds2r8YfLuoE2+KepGk0DooYaFgMnrP9PNLLXVx830iGzMXGpkuexVxMKJuGUErVQkgbAEBpkTlc4khS/N6hREU2PPWIlAedllVLNLN2H7xAyFmQSBVAbBbP1+sKufexRGPzw52vW34xZFe4Cil6TihzshLv4JTq5zEmfrBjYTwMRAWFQKhQ1X9HzRNKFeRAsrmncUNcQrFKG2ucrAOgOOF8BmopCvI+iTYpLPT475EBgCfJevPCieoyCxIxP2vQIZx7MQ0FKv9/VdELRc/DlP5UZwuIqgYNHSjYmBtzvpoOqSXI9k9eWd833FnJ/82vPx4IV2APcDBZ+pXflkYUxhXK+BsxOb2L8eiFLrHyq3ZI1nacNBuaT+oNPBs7oZfdFIDbeAhLOcUQZcrhwIGv3Mfnn4H1k+HMVwQTY1zdoelj6U/MA2ZmcBcVu0xOAazUiMqTN9Z3U1cRALMiBbuF9dXJjPm13z/4P9R4ABANu4bb16FOo4AAAAAElFTkSuQmCC) no-repeat !important;
    display: inline-block !important;
    float: right !important;
}
#lleo_dialog #lleo_gBrand.hidden {
    display: none !important;
}*/
#lleo_dialog #lleo_translateContextLink {
    color: #444 !important;
    text-shadow: 1px 1px 0 #f4f4f4 !important;
    background: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#ddd)) !important;
    background: -moz-linear-gradient(-90deg, #f4f4f4, #ddd) !important;
    border: solid 1px !important;
    box-shadow: 1px 1px 0 #f6f6f6 !important;
    border-color: #999 #aaa #aaa #999 !important;
    -moz-border-radius: 2px !important;
	-webkit-border-radius: 2px !important;
	border-radius: 2px !important;
    padding: 0 3px !important;
    font-size: 11px !important;
    text-decoration: none !important;
    margin: 1px 5px 0 !important;
    display: inline-block !important;
    white-space: nowrap !important;
}
#lleo_dialog #lleo_translateContextLink:hover {
    background: #f8f8f8 !important;
}
#lleo_dialog #lleo_translateContextLink.hidden {
    visibility: hidden !important;
}

#lleo_dialog #lleo_setTransForm {
    display: block !important;
    margin-top: 3px !important;
    padding-top: 5px !important;
    /* Set position and background because the form might be overlapped by an image when no translations */
    position: relative !important;
    background: #fff !important;
    z-index: 10 !important;
    padding-bottom: 10px !important;
    padding-left: 16px !important;
}
#lleo_dialog .lleo-custom-translation {
    padding: 4px 5px !important;
    border: solid 1px #ddd !important;
	border-radius: 2px !important;
    width: 90% !important;
    min-width: 270px !important;
    background: -webkit-gradient(linear, 0 0, 0 20, from(#f1f1f1), to(#fff)) !important;
    background: -moz-linear-gradient(-90deg, #f1f1f1, #fff) !important;
	font: normal 13px Arial, Helvetica !important;
	line-height: 15px !important;
}
#lleo_dialog .lleo-custom-translation:hover {
    border: solid 1px #aaa !important;
}
#lleo_dialog .lleo-custom-translation:focus {
    background: #FFFEC9 !important;
}

#lleo_dialog *.hidden {
    display: none !important;
}

#lleo_dialog .infinitive{
    color: #D56E00 !important;
    text-decoration: none;
    border-bottom: 1px dotted #D56E00 !important;
}
#lleo_dialog .infinitive:hover{
    border: none !important;
}

#lleo_dialog .lleo_separator {
    height: 1px !important;
    background: #eee;
    margin-top: 10px !important;
    background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%) !important;
    background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, #eee 8%, rgba(255,255,255,1) 80%) !important;
    background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%) !important;
    background: linear-gradient(to right, rgba(255,255,255,1) 0%,#eee 8%,rgba(255,255,255,1) 80%) !important;
}
#lleo_dialog #lleo_trans {
    /*border-top: 1px solid #eeeeee !important;*/
    padding: 5px 30px 0 14px !important;
    zoom: 1;
}

#lleo_dialog .lleo_clearfix {
	display: block !important;
	clear: both !important;
	visibility: hidden !important;
	height: 0 !important;
	font-size: 0 !important;
}


#lleo_dialog #lleo_picOuter table {
    width: 44px !important;
    position: absolute !important;
    right: 0 !important;
    top: 0 !important;
    vertical-align: middle !important;
}

#lleo_dialog #lleo_picOuter td {
    width: 38px !important;
    height: 38px !important;
    /*border: 1px solid #eeeeee !important;*/
    vertical-align: middle !important;
    text-align: center !important;
}

#lleo_dialog #lleo_picOuter td div {
	height: 38px !important;
	overflow: hidden !important;
}

#lleo_dialog .lleo_empty {
    margin: 0 5px 7px !important;
}

#lleo_youtubeExportBtn {
    margin-left: 10px;
    height: 24px;
}
    #lleo_youtubeExportBtn i {
        display: inline-block;
        width: 16px;
        height: 16px;
        background: 0 0 url(https://d144fqpiyasmrr.cloudfront.net/plugins/all/images/i16.png) !important;
    }
    #lleo_youtubeExportBtn .yt-uix-button-content {
        font-size: 12px;
        line-height: 2px;
    }


/*** Parsed Lyrics Content *****************************/

.lleo_lyrics tran {
    background: transparent !important;
    border-radius: 2px !important;
    text-shadow: none !important;
    cursor: pointer !important;
}
    .lleo_lyrics tran:hover {
        color: #fff !important;
        background: #C77213 !important;
        -webkit-transition: all 0.1s !important;
        -moz-transition: all 0.1s !important;
        -ms-transition: all 0.1s !important;
        -o-transition: all 0.1s !important;
        transition: all 0.1s !important;
    }

.lleo_songName {
    border: solid 1px #ffd47c;
    background: #fff1c2;
    border-radius: 2px;
}

.lleo_hidden_iframe {
    visibility: hidden;
}</style></head><body cz-shortcut-listen="true"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php
<br></span><span style="color: #FF8000">//////////////////////////////////////////////////////////////
<br>//&nbsp;&nbsp;&nbsp;phpThumb()&nbsp;by&nbsp;James&nbsp;Heinrich&nbsp;&lt;info@silisoftware.com&gt;&nbsp;&nbsp;&nbsp;//
<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;available&nbsp;at&nbsp;http://phpthumb.sourceforge.net&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//
<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and/or&nbsp;https://github.com/JamesHeinrich/phpThumb&nbsp;//
<br>//////////////////////////////////////////////////////////////
<br>///&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//
<br>//&nbsp;phpthumb.functions.php&nbsp;-&nbsp;general&nbsp;support&nbsp;functions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//
<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;///
<br>//////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">phpthumb_functions&nbsp;</span><span style="color: #007700">{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">user_function_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$functionname</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'get_defined_functions'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$get_defined_functions&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$get_defined_functions</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$get_defined_functions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_defined_functions</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$functionname</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$get_defined_functions</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$functionname</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">builtin_function_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$functionname</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'get_defined_functions'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$get_defined_functions&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$get_defined_functions</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$get_defined_functions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">get_defined_functions</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$functionname</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$get_defined_functions</span><span style="color: #007700">[</span><span style="color: #DD0000">'internal'</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$functionname</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">version_compare_replacement_sub</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;If&nbsp;you&nbsp;specify&nbsp;the&nbsp;third&nbsp;optional&nbsp;operator&nbsp;argument,&nbsp;you&nbsp;can&nbsp;test&nbsp;for&nbsp;a&nbsp;particular&nbsp;relationship.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;The&nbsp;possible&nbsp;operators&nbsp;are:&nbsp;&lt;,&nbsp;lt,&nbsp;&lt;=,&nbsp;le,&nbsp;&gt;,&nbsp;gt,&nbsp;&gt;=,&nbsp;ge,&nbsp;==,&nbsp;=,&nbsp;eq,&nbsp;!=,&nbsp;&lt;&gt;,&nbsp;ne&nbsp;respectively.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Using&nbsp;this&nbsp;argument,&nbsp;the&nbsp;function&nbsp;will&nbsp;return&nbsp;1&nbsp;if&nbsp;the&nbsp;relationship&nbsp;is&nbsp;the&nbsp;one&nbsp;specified&nbsp;by&nbsp;the&nbsp;operator,&nbsp;0&nbsp;otherwise.
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;If&nbsp;a&nbsp;part&nbsp;contains&nbsp;special&nbsp;version&nbsp;strings&nbsp;these&nbsp;are&nbsp;handled&nbsp;in&nbsp;the&nbsp;following&nbsp;order:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;(any&nbsp;string&nbsp;not&nbsp;found&nbsp;in&nbsp;this&nbsp;list)&nbsp;&lt;&nbsp;(dev)&nbsp;&lt;&nbsp;(alpha&nbsp;=&nbsp;a)&nbsp;&lt;&nbsp;(beta&nbsp;=&nbsp;b)&nbsp;&lt;&nbsp;(RC&nbsp;=&nbsp;rc)&nbsp;&lt;&nbsp;(#)&nbsp;&lt;&nbsp;(pl&nbsp;=&nbsp;p)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">static&nbsp;</span><span style="color: #0000BB">$versiontype_lookup&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'dev'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10001</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'a'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10002</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'alpha'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">10002</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'b'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10003</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'beta'</span><span style="color: #007700">]&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10003</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'RC'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10004</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'rc'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10004</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10005</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'pl'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10006</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #DD0000">'p'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #0000BB">10006</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">=&nbsp;(isset(</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #0000BB">$version1</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #0000BB">$version1</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$version1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version2&nbsp;</span><span style="color: #007700">=&nbsp;(isset(</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #0000BB">$version2</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$versiontype_lookup</span><span style="color: #007700">[</span><span style="color: #0000BB">$version2</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$operator</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&lt;'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'lt'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&lt;='</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'le'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'gt'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&gt;='</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'ge'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'=='</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'='</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'eq'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'!='</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&lt;&gt;'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'ne'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">version_compare_replacement</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'version_compare'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;built&nbsp;into&nbsp;PHP&nbsp;v4.1.0+
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">version_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;The&nbsp;function&nbsp;first&nbsp;replaces&nbsp;_,&nbsp;-&nbsp;and&nbsp;+&nbsp;with&nbsp;a&nbsp;dot&nbsp;.&nbsp;in&nbsp;the&nbsp;version&nbsp;strings
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_-+'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$version2</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_-+'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;and&nbsp;also&nbsp;inserts&nbsp;dots&nbsp;.&nbsp;before&nbsp;and&nbsp;after&nbsp;any&nbsp;non&nbsp;number&nbsp;so&nbsp;that&nbsp;for&nbsp;example&nbsp;'4.3.2RC1'&nbsp;becomes&nbsp;'4.3.2.RC.1'.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Then&nbsp;it&nbsp;splits&nbsp;the&nbsp;results&nbsp;like&nbsp;if&nbsp;you&nbsp;were&nbsp;using&nbsp;explode('.',$ver).&nbsp;Then&nbsp;it&nbsp;compares&nbsp;the&nbsp;parts&nbsp;starting&nbsp;from&nbsp;left&nbsp;to&nbsp;right.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#([0-9]+)([A-Z]+)([0-9]+)#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"$1.$2.$3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#([0-9]+)([A-Z]+)([0-9]+)#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"$1.$2.$3"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parts1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parts2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parts_count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$parts1</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$parts2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$parts_count</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$comparison&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">version_compare_replacement_sub</span><span style="color: #007700">(</span><span style="color: #0000BB">$version1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$operator</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$comparison&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$comparison</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">escapeshellarg_replacement</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'escapeshellarg'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #DD0000">'escapeshellarg'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">escapeshellarg</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'\''</span><span style="color: #007700">.</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\''</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'\\\''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">).</span><span style="color: #DD0000">'\''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">phpinfo_array</span><span style="color: #007700">()&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$phpinfo_array&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$phpinfo_array</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">phpinfo</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpinfo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpinfo_array&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$phpinfo</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$phpinfo_array</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">exif_info</span><span style="color: #007700">()&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$exif_info&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$exif_info</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;based&nbsp;on&nbsp;code&nbsp;by&nbsp;johnschaefer&nbsp;at&nbsp;gmx&nbsp;dot&nbsp;de
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;from&nbsp;PHP&nbsp;help&nbsp;on&nbsp;gd_info()
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exif_info&nbsp;</span><span style="color: #007700">=&nbsp;array(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'EXIF&nbsp;Support'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'EXIF&nbsp;Version'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Supported&nbsp;EXIF&nbsp;Version'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Supported&nbsp;filetypes'&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpinfo_array&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">phpinfo_array</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$phpinfo_array&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$line&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$exif_info&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newvalue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exif_info</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$newvalue</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$exif_info</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ImageTypeToMIMEtype</span><span style="color: #007700">(</span><span style="color: #0000BB">$imagetype</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'image_type_to_mime_type'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$imagetype&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$imagetype&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PHP&nbsp;v4.3.0+
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">image_type_to_mime_type</span><span style="color: #007700">(</span><span style="color: #0000BB">$imagetype</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$image_type_to_mime_type&nbsp;</span><span style="color: #007700">=&nbsp;array(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/gif'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_GIF
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JPEG
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/png'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_PNG
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">4&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'application/x-shockwave-flash'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_SWF
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">5&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/psd'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_PSD
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">6&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/bmp'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_BMP
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">7&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/tiff'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_TIFF_II&nbsp;(intel&nbsp;byte&nbsp;order)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">8&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/tiff'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_TIFF_MM&nbsp;(motorola&nbsp;byte&nbsp;order)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">9&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'application/octet-stream'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JPC
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">10&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/jp2'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JP2
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">11&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'application/octet-stream'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JPX
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">12&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'application/octet-stream'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JB2
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">13&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'application/x-shockwave-flash'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_SWC
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">14&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/iff'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_IFF
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">15&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/vnd.wap.wbmp'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_WBMP
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">16&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/xbm'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_XBM
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'gif'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/gif'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_GIF
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jpg'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JPEG
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'jpeg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/jpeg'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_JPEG
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'png'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/png'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_PNG
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bmp'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/bmp'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IMAGETYPE_BMP
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ico'&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/x-icon'</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(isset(</span><span style="color: #0000BB">$image_type_to_mime_type</span><span style="color: #007700">[</span><span style="color: #0000BB">$imagetype</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$image_type_to_mime_type</span><span style="color: #007700">[</span><span style="color: #0000BB">$imagetype</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">TranslateWHbyAngle</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$angle</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$angle&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">180</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$width</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newwidth&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">sin</span><span style="color: #007700">(</span><span style="color: #0000BB">deg2rad</span><span style="color: #007700">(</span><span style="color: #0000BB">$angle</span><span style="color: #007700">)))&nbsp;*&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">cos</span><span style="color: #007700">(</span><span style="color: #0000BB">deg2rad</span><span style="color: #007700">(</span><span style="color: #0000BB">$angle</span><span style="color: #007700">)))&nbsp;*&nbsp;</span><span style="color: #0000BB">$width</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newheight&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">sin</span><span style="color: #007700">(</span><span style="color: #0000BB">deg2rad</span><span style="color: #007700">(</span><span style="color: #0000BB">$angle</span><span style="color: #007700">)))&nbsp;*&nbsp;</span><span style="color: #0000BB">$width</span><span style="color: #007700">)&nbsp;&nbsp;+&nbsp;(</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">cos</span><span style="color: #007700">(</span><span style="color: #0000BB">deg2rad</span><span style="color: #007700">(</span><span style="color: #0000BB">$angle</span><span style="color: #007700">)))&nbsp;*&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">$newwidth</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newheight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">HexCharDisplay</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;0x'</span><span style="color: #007700">.</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">dechex</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">})),&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">IsHexColor</span><span style="color: #007700">(</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^[0-9A-F]{6}$#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ImageColorAllocateAlphaSafe</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$R</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$G</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$B</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$alpha</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">version_compare_replacement</span><span style="color: #007700">(</span><span style="color: #0000BB">phpversion</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'4.3.2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&gt;='</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$alpha&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">imagecolorallocatealpha</span><span style="color: #007700">(</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$R</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$G</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$B</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$alpha</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$R</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$G</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$B</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ImageHexColorAllocate</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dieOnInvalid</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$alpha</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'$gdimg_hexcolorallocate&nbsp;is&nbsp;not&nbsp;a&nbsp;GD&nbsp;resource&nbsp;in&nbsp;ImageHexColorAllocate()'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">IsHexColor</span><span style="color: #007700">(</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$R&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">hexdec</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$G&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">hexdec</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$B&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">hexdec</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ImageColorAllocateAlphaSafe</span><span style="color: #007700">(</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$R</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$G</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$B</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$alpha</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$dieOnInvalid</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Invalid&nbsp;hex&nbsp;color&nbsp;string:&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$HexColorString</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(</span><span style="color: #0000BB">$gdimg_hexcolorallocate</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x00</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x00</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x00</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">HexColorXOR</span><span style="color: #007700">(</span><span style="color: #0000BB">$hexcolor</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">dechex</span><span style="color: #007700">(~</span><span style="color: #0000BB">hexdec</span><span style="color: #007700">(</span><span style="color: #0000BB">$hexcolor</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0xFFFFFF</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">GetPixelColor</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;@</span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;@</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">PixelColorDifferencePercent</span><span style="color: #007700">(</span><span style="color: #0000BB">$currentPixel</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$targetPixel</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$targetPixel&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$channel&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$currentvalue</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">$diff</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">$currentPixel</span><span style="color: #007700">[</span><span style="color: #0000BB">$channel</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$targetPixel</span><span style="color: #007700">[</span><span style="color: #0000BB">$channel</span><span style="color: #007700">])&nbsp;-&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$currentPixel</span><span style="color: #007700">[</span><span style="color: #0000BB">$channel</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$targetPixel</span><span style="color: #007700">[</span><span style="color: #0000BB">$channel</span><span style="color: #007700">]))&nbsp;/&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$diff&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">GrayscaleValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$g</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">((</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.30</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$g&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.59</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.11</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">GrayscalePixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$OriginalPixel</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gray&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">GrayscaleValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$OriginalPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$OriginalPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$OriginalPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #DD0000">'red'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$gray</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'green'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$gray</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$gray</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">GrayscalePixelRGB</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$g&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;&nbsp;</span><span style="color: #0000BB">$rgb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.299</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$g&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.587</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">0.114</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ScaleToFitInBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$width</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$maxwidth</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$maxheight</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$allow_enlarge</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$allow_reduce</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$maxwidth&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$maxwidth</span><span style="color: #007700">)&nbsp;&nbsp;?&nbsp;</span><span style="color: #0000BB">$width&nbsp;&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$maxwidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$maxheight&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$maxheight</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$height&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$maxheight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale_x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale_y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$width&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$maxwidth</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$width&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$maxwidth</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale_x&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$maxwidth&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$width</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$height&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$maxheight</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$height&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$maxheight</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale_y&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$maxheight&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$scale_x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$scale_y</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$allow_enlarge</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$scale</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$allow_reduce</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scale&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">max</span><span style="color: #007700">(</span><span style="color: #0000BB">$scale</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$scale</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ImageCopyResampleBicubic</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_w</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_h</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_w</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_h</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ron&nbsp;at&nbsp;korving&nbsp;dot&nbsp;demon&nbsp;dot&nbsp;nl
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;http://www.php.net/imagecopyresampled
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scaleX&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$src_w&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">$dst_w</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scaleY&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$src_h&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">$dst_h</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scaleX2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$scaleX&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">2.0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scaleY2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$scaleY&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">2.0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isTrueColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imageistruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$src_y</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$src_y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$dst_h</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sY&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$scaleY</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$siY&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(int)&nbsp;</span><span style="color: #0000BB">$sY</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$siY2&nbsp;</span><span style="color: #007700">=&nbsp;(int)&nbsp;</span><span style="color: #0000BB">$sY&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$scaleY2</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$src_x</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$src_x&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$dst_w</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sX&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$scaleX</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$siX&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(int)&nbsp;</span><span style="color: #0000BB">$sX</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$siX2&nbsp;</span><span style="color: #007700">=&nbsp;(int)&nbsp;</span><span style="color: #0000BB">$sX&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$scaleX2</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$isTrueColor</span><span style="color: #007700">)&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY2</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">=&nbsp;((&nbsp;</span><span style="color: #0000BB">$c1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">+&nbsp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">+&nbsp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">+&nbsp;&nbsp;</span><span style="color: #0000BB">$c4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0xFF0000</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$g&nbsp;</span><span style="color: #007700">=&nbsp;(((</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x00FF00</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x00FF00</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x00FF00</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x00FF00</span><span style="color: #007700">))&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x00FF00</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;(((</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF</span><span style="color: #007700">))&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c3&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c4&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecolorsforindex</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">imagecolorat</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siX2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$siY</span><span style="color: #007700">));
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;+&nbsp;</span><span style="color: #0000BB">$c2</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;+&nbsp;</span><span style="color: #0000BB">$c3</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;+&nbsp;</span><span style="color: #0000BB">$c4</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]&nbsp;)&nbsp;&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">14</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$g&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">$c2</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">$c3</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">$c4</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">])&nbsp;&lt;&lt;&nbsp;&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]&nbsp;&nbsp;+&nbsp;</span><span style="color: #0000BB">$c2</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]&nbsp;&nbsp;+&nbsp;</span><span style="color: #0000BB">$c3</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]&nbsp;&nbsp;+&nbsp;</span><span style="color: #0000BB">$c4</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]&nbsp;)&nbsp;&gt;&gt;&nbsp;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst_img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_x&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$src_x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$src_y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">+</span><span style="color: #0000BB">$g</span><span style="color: #007700">+</span><span style="color: #0000BB">$b</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ImageCreateFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$x_size</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$y_size</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ImageCreateFunction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'imagecreate'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">gd_version</span><span style="color: #007700">()&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">2.0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ImageCreateFunction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'imagecreatetruecolor'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$ImageCreateFunction</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">phpthumb</span><span style="color: #007700">::</span><span style="color: #0000BB">ErrorImage</span><span style="color: #007700">(</span><span style="color: #0000BB">$ImageCreateFunction</span><span style="color: #007700">.</span><span style="color: #DD0000">'()&nbsp;does&nbsp;not&nbsp;exist&nbsp;-&nbsp;no&nbsp;GD&nbsp;support?'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$x_size&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$y_size&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">phpthumb</span><span style="color: #007700">::</span><span style="color: #0000BB">ErrorImage</span><span style="color: #007700">(</span><span style="color: #DD0000">'Invalid&nbsp;image&nbsp;dimensions:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$ImageCreateFunction</span><span style="color: #007700">.</span><span style="color: #DD0000">'('</span><span style="color: #007700">.</span><span style="color: #0000BB">$x_size</span><span style="color: #007700">.</span><span style="color: #DD0000">',&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$y_size</span><span style="color: #007700">.</span><span style="color: #DD0000">')'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ImageCreateFunction</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$x_size</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$y_size</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ImageCopyRespectAlpha</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$dst_im</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$src_im</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_w</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$src_h</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$opacity_pct</span><span style="color: #007700">=</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$opacipct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$opacity_pct&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$src_x</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$src_w</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$src_y</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$src_h</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$RealPixel&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">GetPixelColor</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst_im</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_x&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$OverlayPixel&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">GetPixelColor</span><span style="color: #007700">(</span><span style="color: #0000BB">$src_im</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alphapct&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$OverlayPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'alpha'</span><span style="color: #007700">]&nbsp;/&nbsp;</span><span style="color: #0000BB">127</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$overlaypct&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$alphapct</span><span style="color: #007700">)&nbsp;*&nbsp;</span><span style="color: #0000BB">$opacipct</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newcolor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ImageColorAllocateAlphaSafe</span><span style="color: #007700">(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dst_im</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$RealPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;*&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$overlaypct</span><span style="color: #007700">))&nbsp;+&nbsp;(</span><span style="color: #0000BB">$OverlayPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'red'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;*&nbsp;</span><span style="color: #0000BB">$overlaypct</span><span style="color: #007700">),
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$RealPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">]&nbsp;*&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$overlaypct</span><span style="color: #007700">))&nbsp;+&nbsp;(</span><span style="color: #0000BB">$OverlayPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'green'</span><span style="color: #007700">]&nbsp;*&nbsp;</span><span style="color: #0000BB">$overlaypct</span><span style="color: #007700">),
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$RealPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]&nbsp;&nbsp;*&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$overlaypct</span><span style="color: #007700">))&nbsp;+&nbsp;(</span><span style="color: #0000BB">$OverlayPixel</span><span style="color: #007700">[</span><span style="color: #DD0000">'blue'</span><span style="color: #007700">]&nbsp;&nbsp;*&nbsp;</span><span style="color: #0000BB">$overlaypct</span><span style="color: #007700">),
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//$RealPixel['alpha']);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$dst_im</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_x&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dst_y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$newcolor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ProportionalResize</span><span style="color: #007700">(</span><span style="color: #0000BB">$old_width</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$old_height</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$new_width</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$new_height</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$old_width&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$old_height</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$new_height&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new_height&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$new_height&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new_height&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new_aspect_ratio&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$new_height</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$new_aspect_ratio&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;great,&nbsp;done
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$new_aspect_ratio&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;limited&nbsp;by&nbsp;width
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new_height&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$new_aspect_ratio&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;limited&nbsp;by&nbsp;height
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new_width&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new_height&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$old_aspect_ratio</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$new_width</span><span style="color: #007700">)),&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">round</span><span style="color: #007700">(</span><span style="color: #0000BB">$new_height</span><span style="color: #007700">)));
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #0000BB">$function</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$DisabledFunctions&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$DisabledFunctions</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$disable_functions_local&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(@</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'disable_functions'</span><span style="color: #007700">)));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$disable_functions_global&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(@</span><span style="color: #0000BB">get_cfg_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'disable_functions'</span><span style="color: #007700">)));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$disable_functions_local&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$DisabledFunctions</span><span style="color: #007700">[</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)]&nbsp;=&nbsp;</span><span style="color: #DD0000">'local'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$disable_functions_global&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$DisabledFunctions</span><span style="color: #007700">[</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)]&nbsp;=&nbsp;</span><span style="color: #DD0000">'global'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'safe_mode'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$DisabledFunctions</span><span style="color: #007700">[</span><span style="color: #DD0000">'shell_exec'</span><span style="color: #007700">]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;</span><span style="color: #DD0000">'local'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$DisabledFunctions</span><span style="color: #007700">[</span><span style="color: #DD0000">'set_time_limit'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'local'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$DisabledFunctions</span><span style="color: #007700">[</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$function</span><span style="color: #007700">)]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">SafeExec</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$AllowedExecFunctions&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$AllowedExecFunctions</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$AllowedExecFunctions&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'shell_exec'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'passthru'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'system'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'exec'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">true</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$AllowedExecFunctions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$AllowedExecFunctions</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;!</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$command&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;2&gt;&amp;1'</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;force&nbsp;redirect&nbsp;stderr&nbsp;to&nbsp;stdout
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$AllowedExecFunctions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$execfunction&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$is_allowed</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$is_allowed</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returnvalue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$execfunction</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'passthru'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'system'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$execfunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returnvalue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'exec'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastline&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$execfunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returnvalue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'shell_exec'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$returnvalue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$execfunction</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$returnvalue</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ApacheLookupURIarray</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;apache_lookup_uri()&nbsp;only&nbsp;works&nbsp;when&nbsp;PHP&nbsp;is&nbsp;installed&nbsp;as&nbsp;an&nbsp;Apache&nbsp;module.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">php_sapi_name</span><span style="color: #007700">()&nbsp;==&nbsp;</span><span style="color: #DD0000">'apache'</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//$property_exists_exists&nbsp;=&nbsp;function_exists('property_exists');
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'status'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the_request'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'status_line'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'method'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'content_type'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'handler'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'filename'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'path_info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'args'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'boundary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'no_cache'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'no_local_copy'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'allowed'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'send_bodyct'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'bytes_sent'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'byterange'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'clength'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'unparsed_uri'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'mtime'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'request_time'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$apacheLookupURIobject&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">apache_lookup_uri</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$apacheLookupURIarray&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$apacheLookupURIarray</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;@</span><span style="color: #0000BB">$apacheLookupURIobject</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$apacheLookupURIarray</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">gd_is_bundled</span><span style="color: #007700">()&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$isbundled&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$isbundled</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">gd_info</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isbundled&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">],&nbsp;</span><span style="color: #DD0000">'bundled'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$isbundled</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">gd_version</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullstring</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$cache_gd_version&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$cache_gd_version</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">gd_info</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#bundled&nbsp;\((.+)\)$#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache_gd_version</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">];&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;"bundled&nbsp;(2.0.15&nbsp;compatible)"
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache_gd_version</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;=&nbsp;(float)&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;"2.0"&nbsp;(not&nbsp;"bundled&nbsp;(2.0.15&nbsp;compatible)")
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache_gd_version</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;"1.6.2&nbsp;or&nbsp;higher"
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache_gd_version</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;=&nbsp;(float)&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;"1.6"&nbsp;(not&nbsp;"1.6.2&nbsp;or&nbsp;higher")
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$cache_gd_version</span><span style="color: #007700">[</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullstring</span><span style="color: #007700">)];
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">filesize_remote</span><span style="color: #007700">(</span><span style="color: #0000BB">$remotefile</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">=</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ParseURLbetter</span><span style="color: #007700">(</span><span style="color: #0000BB">$remotefile</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">],&nbsp;(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HEAD&nbsp;'</span><span style="color: #007700">.@</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'path'</span><span style="color: #007700">].@</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'query'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&nbsp;HTTP/1.0'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">.</span><span style="color: #DD0000">'Host:&nbsp;'</span><span style="color: #007700">.@</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">].</span><span style="color: #DD0000">"\r\n\r\n"</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">version_compare_replacement</span><span style="color: #007700">(</span><span style="color: #0000BB">phpversion</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'4.3.0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&gt;='</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">stream_set_timeout</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headerline&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">4096</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^Content-Length:&nbsp;(.*)#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$headerline</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">filedate_remote</span><span style="color: #007700">(</span><span style="color: #0000BB">$remotefile</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">=</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ParseURLbetter</span><span style="color: #007700">(</span><span style="color: #0000BB">$remotefile</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">],&nbsp;(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HEAD&nbsp;'</span><span style="color: #007700">.@</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'path'</span><span style="color: #007700">].@</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'query'</span><span style="color: #007700">].</span><span style="color: #DD0000">'&nbsp;HTTP/1.0'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">.</span><span style="color: #DD0000">'Host:&nbsp;'</span><span style="color: #007700">.@</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">].</span><span style="color: #DD0000">"\r\n\r\n"</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">version_compare_replacement</span><span style="color: #007700">(</span><span style="color: #0000BB">phpversion</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'4.3.0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&gt;='</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">stream_set_timeout</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$headerline&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">4096</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^Last-Modified:&nbsp;(.*)#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$headerline</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$date&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;-&nbsp;</span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'Z'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$date</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">md5_file_safe</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;md5_file()&nbsp;doesn't&nbsp;exist&nbsp;in&nbsp;PHP&nbsp;&lt;&nbsp;4.2.0
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'md5_file'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">md5_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buffer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8192</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">nonempty_min</span><span style="color: #007700">()&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arg_list&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$acceptable&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$arg_list&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$acceptable</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$acceptable</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">LittleEndian2String</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$minbytes</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$intstring&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">$number&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$intstring&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$intstring</span><span style="color: #007700">.</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$number&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$number&nbsp;</span><span style="color: #007700">&gt;&gt;=&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$intstring</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$minbytes</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\x00"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">STR_PAD_RIGHT</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">OneOfThese</span><span style="color: #007700">()&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;return&nbsp;the&nbsp;first&nbsp;useful&nbsp;(non-empty/non-zero/non-false)&nbsp;value&nbsp;from&nbsp;those&nbsp;passed
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$arg_list&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$arg_list&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">CaseInsensitiveInArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$needle</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$haystack</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$needle&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$needle</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$haystack&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;skip?
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$needle&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">URLreadFsock</span><span style="color: #007700">(</span><span style="color: #0000BB">$host</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$successonly</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">=</span><span style="color: #0000BB">80</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">=</span><span style="color: #0000BB">10</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'fsockopen'</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #DD0000">'fsockopen'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errstr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'fsockopen()&nbsp;unavailable'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//if&nbsp;($fp&nbsp;=&nbsp;@fsockopen($host,&nbsp;$port,&nbsp;$errno,&nbsp;$errstr,&nbsp;$timeout))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(((</span><span style="color: #0000BB">$port&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">443</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">'ssl://'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">).</span><span style="color: #0000BB">$host</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">))&nbsp;{&nbsp;</span><span style="color: #FF8000">//&nbsp;https://github.com/JamesHeinrich/phpThumb/issues/39
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'GET&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;HTTP/1.0'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'Host:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$host</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'Connection:&nbsp;Close'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n\r\n"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$out</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isHeader&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Data_header&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Data_body&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header_newlocation&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$line&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1024</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$isHeader</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Data_header&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Data_body&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^HTTP/[\\.0-9]+&nbsp;([0-9]+)&nbsp;(.+)$#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(&nbsp;,&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errno&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$errno</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^Location:&nbsp;(.*)$#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header_newlocation&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$isHeader&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$line&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$isHeader&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$successonly</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$errno</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">200</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;great,&nbsp;continue
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errstr&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">.(</span><span style="color: #0000BB">$header_newlocation&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">';&nbsp;Location:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$header_newlocation&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$Data_body</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">CleanUpURLencoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$queryseperator</span><span style="color: #007700">=</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^http#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parse_url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ParseURLbetter</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathelements&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'path'</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$CleanPathElements&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$TranslationMatrix&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'%20'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$pathelements&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$pathelement</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$CleanPathElements</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathelement</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$TranslationMatrix</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$CleanPathElements&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$CleanPathElements</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$queries&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #0000BB">$queryseperator</span><span style="color: #007700">,&nbsp;(isset(</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'query'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'query'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$CleanQueries&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$queries&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@list(</span><span style="color: #0000BB">$param</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'='</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$CleanQueries</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$param</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$TranslationMatrix</span><span style="color: #007700">).(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$TranslationMatrix</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$CleanQueries&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$CleanQueries</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cleaned_url&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'scheme'</span><span style="color: #007700">].</span><span style="color: #DD0000">'://'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cleaned_url&nbsp;</span><span style="color: #007700">.=&nbsp;(@</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'username'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">].(@</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'password'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'password'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">).</span><span style="color: #DD0000">'@'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cleaned_url&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cleaned_url&nbsp;</span><span style="color: #007700">.=&nbsp;((!empty(</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">))&nbsp;?&nbsp;</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$parse_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cleaned_url&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$CleanPathElements</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cleaned_url&nbsp;</span><span style="color: #007700">.=&nbsp;(@</span><span style="color: #0000BB">$CleanQueries&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'?'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$queryseperator</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$CleanQueries</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$cleaned_url</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ParseURLbetter</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsedURL&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">parse_url</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!@</span><span style="color: #0000BB">$parsedURL</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">])&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(@</span><span style="color: #0000BB">$parsedURL</span><span style="color: #007700">[</span><span style="color: #DD0000">'scheme'</span><span style="color: #007700">]))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'ftp'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsedURL</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">21</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'https'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsedURL</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">443</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'http'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsedURL</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$parsedURL</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">SafeURLread</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">=</span><span style="color: #0000BB">10</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$followredirects</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$errstr&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsed_url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ParseURLbetter</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alreadyLookedAtURLs</span><span style="color: #007700">[</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">)]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tryagain&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">URLreadFsock</span><span style="color: #007700">(@</span><span style="color: #0000BB">$parsed_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'host'</span><span style="color: #007700">],&nbsp;@</span><span style="color: #0000BB">$parsed_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'path'</span><span style="color: #007700">].</span><span style="color: #DD0000">'?'</span><span style="color: #007700">.@</span><span style="color: #0000BB">$parsed_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'query'</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;(@</span><span style="color: #0000BB">$parsed_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;?&nbsp;@</span><span style="color: #0000BB">$parsed_url</span><span style="color: #007700">[</span><span style="color: #DD0000">'port'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$followredirects&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#302&nbsp;[a-z&nbsp;]+;&nbsp;Location\\:&nbsp;(http.*)#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(@</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!@</span><span style="color: #0000BB">$alreadyLookedAtURLs</span><span style="color: #007700">[</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]])&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;loop&nbsp;through&nbsp;and&nbsp;examine&nbsp;new&nbsp;URL
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'URL&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #DD0000">'"&nbsp;redirected&nbsp;to&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">].</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tryagain&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$alreadyLookedAtURLs</span><span style="color: #007700">[</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$parsed_url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">ParseURLbetter</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$tryagain</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'Error&nbsp;opening&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #DD0000">'":'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;fall&nbsp;through
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'Error&nbsp;opening&nbsp;"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #DD0000">'":'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'curl_version'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #DD0000">'curl_exec'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ch&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">curl_init</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_URL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_HEADER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_BINARYTRANSFER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_SSL_VERIFYHOST</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_SSL_VERIFYPEER</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_FOLLOWLOCATION</span><span style="color: #007700">,&nbsp;(bool)&nbsp;</span><span style="color: #0000BB">$followredirects</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">CURLOPT_TIMEOUT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$timeout</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'CURL&nbsp;succeeded&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;bytes);&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'CURL&nbsp;available&nbsp;but&nbsp;returned&nbsp;no&nbsp;data;&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'CURL&nbsp;unavailable;&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$BrokenURLfopenPHPversions&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'4.4.2'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">phpversion</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$BrokenURLfopenPHPversions</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'fopen(URL)&nbsp;broken&nbsp;in&nbsp;PHP&nbsp;v'</span><span style="color: #007700">.</span><span style="color: #0000BB">phpversion</span><span style="color: #007700">().</span><span style="color: #DD0000">';&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(@</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'allow_url_fopen'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error_fopen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buffer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8192</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error_fopen&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">ob_get_contents</span><span style="color: #007700">()));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$error_fopen</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$error_fopen</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">';&nbsp;"allow_url_fopen"&nbsp;succeeded&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;bytes);&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">';&nbsp;"allow_url_fopen"&nbsp;enabled&nbsp;but&nbsp;returned&nbsp;no&nbsp;data&nbsp;('</span><span style="color: #007700">.</span><span style="color: #0000BB">$error_fopen</span><span style="color: #007700">.</span><span style="color: #DD0000">');&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'"allow_url_fopen"&nbsp;disabled;&nbsp;'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">EnsureDirectoryExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$directory_elements&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$startoffset&nbsp;</span><span style="color: #007700">=&nbsp;(!</span><span style="color: #0000BB">$directory_elements</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;unix&nbsp;with&nbsp;leading&nbsp;"/"&nbsp;then&nbsp;start&nbsp;with&nbsp;2nd&nbsp;element;&nbsp;Windows&nbsp;with&nbsp;leading&nbsp;"c:\"&nbsp;then&nbsp;start&nbsp;with&nbsp;1st&nbsp;element
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$open_basedirs&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'#[;:]#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'open_basedir'</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$open_basedirs&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$open_basedir</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^'</span><span style="color: #007700">.</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$open_basedir</span><span style="color: #007700">).</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$open_basedir</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$startoffset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$open_basedir</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$startoffset</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endoffset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory_elements</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$startoffset</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;=&nbsp;</span><span style="color: #0000BB">$endoffset</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$test_directory&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$directory_elements</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!@</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;directory&nbsp;name&nbsp;already&nbsp;exists&nbsp;as&nbsp;a&nbsp;file
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0755</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0755</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!@</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">)&nbsp;||&nbsp;!@</span><span style="color: #0000BB">is_writeable</span><span style="color: #007700">(</span><span style="color: #0000BB">$test_directory</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">GetAllFilesInSubfolders</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$AllFiles&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dirname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'/\\'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$dirhandle&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">opendir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;((</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">readdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirhandle</span><span style="color: #007700">))&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fullfilename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dirname</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$file</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullfilename</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$AllFiles</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$fullfilename</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullfilename</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'..'</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$AllFiles</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$fullfilename</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$subfiles&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">GetAllFilesInSubfolders</span><span style="color: #007700">(</span><span style="color: #0000BB">$fullfilename</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$subfiles&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$AllFiles</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ignore?
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">closedir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dirhandle</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$AllFiles</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_unique</span><span style="color: #007700">(</span><span style="color: #0000BB">$AllFiles</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">SanitizeFilename</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[^'</span><span style="color: #007700">.</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;!#$%^()+,-.;&lt;&gt;=@[]_{}'</span><span style="color: #007700">).</span><span style="color: #DD0000">'a-zA-Z0-9]/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">version_compare_replacement</span><span style="color: #007700">(</span><span style="color: #0000BB">phpversion</span><span style="color: #007700">(),&nbsp;</span><span style="color: #DD0000">'4.1.0'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'&gt;='</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">PasswordStrength</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$strength&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$strength&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#[^a-z]#'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">))&nbsp;*&nbsp;</span><span style="color: #0000BB">0.5</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;lowercase&nbsp;characters&nbsp;are&nbsp;weak
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$strength&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#[^A-Z]#'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">))&nbsp;*&nbsp;</span><span style="color: #0000BB">0.8</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;uppercase&nbsp;characters&nbsp;are&nbsp;somewhat&nbsp;better
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$strength&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#[^0-9]#'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">))&nbsp;*&nbsp;</span><span style="color: #0000BB">1.0</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;numbers&nbsp;are&nbsp;somewhat&nbsp;better
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$strength&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#[a-zA-Z0-9]#'</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">))&nbsp;*&nbsp;</span><span style="color: #0000BB">2.0</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;other&nbsp;non-alphanumeric&nbsp;characters&nbsp;are&nbsp;best
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$strength</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>}
<br>
<br>
<br></span><span style="color: #FF8000">//////////////&nbsp;END:&nbsp;class&nbsp;phpthumb_functions&nbsp;//////////////
<br>
<br>
<br></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'gd_info'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;built&nbsp;into&nbsp;PHP&nbsp;v4.3.0+&nbsp;(with&nbsp;bundled&nbsp;GD2&nbsp;library)
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gd_info</span><span style="color: #007700">()&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$gd_info&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;based&nbsp;on&nbsp;code&nbsp;by&nbsp;johnschaefer&nbsp;at&nbsp;gmx&nbsp;dot&nbsp;de
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;from&nbsp;PHP&nbsp;help&nbsp;on&nbsp;gd_info()
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info&nbsp;</span><span style="color: #007700">=&nbsp;array(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'GD&nbsp;Version'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'FreeType&nbsp;Support'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'FreeType&nbsp;Linkage'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'T1Lib&nbsp;Support'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'GIF&nbsp;Read&nbsp;Support'&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'GIF&nbsp;Create&nbsp;Support'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'JPG&nbsp;Support'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'PNG&nbsp;Support'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'WBMP&nbsp;Support'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'XBM&nbsp;Support'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpinfo_array&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">phpinfo_array</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$phpinfo_array&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$line&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">strip_tags</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$gd_info&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//if&nbsp;(strpos($line,&nbsp;$key)&nbsp;!==&nbsp;false)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$line</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$newvalue&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$line</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$newvalue</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">]))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;probable&nbsp;cause:&nbsp;"phpinfo()&nbsp;disabled&nbsp;for&nbsp;security&nbsp;reasons"
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagetypes'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$imagetypes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagetypes</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$imagetypes&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">IMG_PNG</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'PNG&nbsp;Support'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$imagetypes&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">IMG_GIF</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GIF&nbsp;Create&nbsp;Support'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$imagetypes&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">IMG_JPG</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'JPG&nbsp;Support'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$imagetypes&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">IMG_WBMP</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'WBMP&nbsp;Support'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;to&nbsp;determine&nbsp;capability&nbsp;of&nbsp;GIF&nbsp;creation,&nbsp;try&nbsp;to&nbsp;use&nbsp;imagecreatefromgif&nbsp;on&nbsp;a&nbsp;1px&nbsp;GIF
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagecreatefromgif'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$tempfilename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">phpthumb</span><span style="color: #007700">::</span><span style="color: #0000BB">phpThumb_tempnam</span><span style="color: #007700">())&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp_tempfile&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$tempfilename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'wb'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp_tempfile</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">base64_decode</span><span style="color: #007700">(</span><span style="color: #DD0000">'R0lGODlhAQABAIAAAH//AP///ywAAAAAAQABAAACAUQAOw=='</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;very&nbsp;simple&nbsp;1px&nbsp;GIF&nbsp;file&nbsp;base64-encoded&nbsp;as&nbsp;string
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp_tempfile</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;we&nbsp;can&nbsp;convert&nbsp;the&nbsp;GIF&nbsp;file&nbsp;to&nbsp;a&nbsp;GD&nbsp;image&nbsp;then&nbsp;GIF&nbsp;create&nbsp;support&nbsp;must&nbsp;be&nbsp;enabled,&nbsp;otherwise&nbsp;it's&nbsp;not
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GIF&nbsp;Read&nbsp;Support'</span><span style="color: #007700">]&nbsp;=&nbsp;(bool)&nbsp;@</span><span style="color: #0000BB">imagecreatefromgif</span><span style="color: #007700">(</span><span style="color: #0000BB">$tempfilename</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$tempfilename</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagecreatetruecolor'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;@</span><span style="color: #0000BB">imagecreatetruecolor</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'2.0.1&nbsp;or&nbsp;higher&nbsp;(assumed)'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagecreate'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;@</span><span style="color: #0000BB">imagecreate</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'GD&nbsp;Version'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #DD0000">'1.6.0&nbsp;or&nbsp;higher&nbsp;(assumed)'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$gd_info</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br>
<br>if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'is_executable'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;in&nbsp;PHP&nbsp;v3+,&nbsp;but&nbsp;v5.0+&nbsp;for&nbsp;Windows
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">is_executable</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;poor&nbsp;substitute,&nbsp;but&nbsp;better&nbsp;than&nbsp;nothing
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br>
<br>if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'preg_quote'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;included&nbsp;in&nbsp;PHP&nbsp;v3.0.9+,&nbsp;but&nbsp;may&nbsp;be&nbsp;unavailable&nbsp;if&nbsp;not&nbsp;compiled&nbsp;in
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">=</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$preg_quote_array&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$preg_quote_array</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$escapeables&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'.\\+*?[^]$(){}=!&lt;&gt;|:'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$escapeables</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$strtr_preg_quote</span><span style="color: #007700">[</span><span style="color: #0000BB">$escapeables</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">}]&nbsp;=&nbsp;</span><span style="color: #0000BB">$delimiter</span><span style="color: #007700">.</span><span style="color: #0000BB">$escapeables</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">};
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$strtr_preg_quote</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br>if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'file_get_contents'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;included&nbsp;in&nbsp;PHP&nbsp;v4.3.0+
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^(f|ht)tp\://#i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">SafeURLread</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$buffer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8192</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawData&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rawData</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br>
<br>if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'file_put_contents'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;included&nbsp;in&nbsp;PHP&nbsp;v5.0.0+
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filedata</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fp&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'wb'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filedata</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br>if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagealphablending'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;built-in&nbsp;function&nbsp;requires&nbsp;PHP&nbsp;v4.0.6+&nbsp;*and*&nbsp;GD&nbsp;v2.0.1+
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">imagealphablending</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$blendmode</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;nothing,&nbsp;this&nbsp;function&nbsp;is&nbsp;declared&nbsp;here&nbsp;just&nbsp;to
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;prevent&nbsp;runtime&nbsp;errors&nbsp;if&nbsp;GD2&nbsp;is&nbsp;not&nbsp;available
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br>if&nbsp;(!</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'imagesavealpha'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;built-in&nbsp;function&nbsp;requires&nbsp;PHP&nbsp;v4.3.2+&nbsp;*and*&nbsp;GD&nbsp;v2.0.1+
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">imagesavealpha</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$blendmode</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;do&nbsp;nothing,&nbsp;this&nbsp;function&nbsp;is&nbsp;declared&nbsp;here&nbsp;just&nbsp;to
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;prevent&nbsp;runtime&nbsp;errors&nbsp;if&nbsp;GD2&nbsp;is&nbsp;not&nbsp;available
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br></span>
</span>
</code></body></html>