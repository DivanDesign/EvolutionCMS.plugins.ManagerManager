
<!-- saved from url=(0065)http://phpthumb.sourceforge.net/index.php?source=phpthumb.gif.php -->
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
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>//&nbsp;GIF&nbsp;Util&nbsp;-&nbsp;(C)&nbsp;2003&nbsp;Yamasoft&nbsp;(S/C)
<br>//&nbsp;http://www.yamasoft.com
<br>//&nbsp;All&nbsp;Rights&nbsp;Reserved
<br>//&nbsp;This&nbsp;file&nbsp;can&nbsp;be&nbsp;freely&nbsp;copied,&nbsp;distributed,&nbsp;modified,&nbsp;updated&nbsp;by&nbsp;anyone&nbsp;under&nbsp;the&nbsp;only
<br>//&nbsp;condition&nbsp;to&nbsp;leave&nbsp;the&nbsp;original&nbsp;address&nbsp;(Yamasoft,&nbsp;http://www.yamasoft.com)&nbsp;and&nbsp;this&nbsp;header.
<br>///////////////////////////////////////////////////////////////////////////////////////////////////
<br>//&nbsp;&lt;gif&gt;&nbsp;&nbsp;=&nbsp;gif_loadFile(filename,&nbsp;[index])
<br>//&nbsp;&lt;bool&gt;&nbsp;=&nbsp;gif_getSize(&lt;gif&gt;&nbsp;or&nbsp;filename,&nbsp;&amp;width,&nbsp;&amp;height)
<br>//&nbsp;&lt;bool&gt;&nbsp;=&nbsp;gif_outputAsPng(&lt;gif&gt;,&nbsp;filename,&nbsp;[bgColor])
<br>//&nbsp;&lt;bool&gt;&nbsp;=&nbsp;gif_outputAsBmp(&lt;gif&gt;,&nbsp;filename,&nbsp;[bgcolor])
<br>//&nbsp;&lt;bool&gt;&nbsp;=&nbsp;gif_outputAsJpeg(&lt;gif&gt;,&nbsp;filename,&nbsp;[bgcolor])&nbsp;-&nbsp;use&nbsp;cjpeg&nbsp;if&nbsp;available&nbsp;otherwise&nbsp;uses&nbsp;GD
<br>///////////////////////////////////////////////////////////////////////////////////////////////////
<br>//&nbsp;Original&nbsp;code&nbsp;by&nbsp;Fabien&nbsp;Ezber
<br>//&nbsp;Modified&nbsp;by&nbsp;James&nbsp;Heinrich&nbsp;&lt;info@silisoftware.com&gt;&nbsp;for&nbsp;use&nbsp;in&nbsp;phpThumb()&nbsp;-&nbsp;December&nbsp;10,&nbsp;2003
<br>//&nbsp;*&nbsp;Added&nbsp;function&nbsp;gif_loadFileToGDimageResource()&nbsp;-&nbsp;this&nbsp;returns&nbsp;a&nbsp;GD&nbsp;image&nbsp;resource
<br>//&nbsp;*&nbsp;Modified&nbsp;gif_outputAsJpeg()&nbsp;to&nbsp;check&nbsp;if&nbsp;it's&nbsp;running&nbsp;under&nbsp;Windows,&nbsp;or&nbsp;if&nbsp;cjpeg&nbsp;is&nbsp;not
<br>//&nbsp;&nbsp;&nbsp;available,&nbsp;in&nbsp;which&nbsp;case&nbsp;it&nbsp;will&nbsp;attempt&nbsp;to&nbsp;output&nbsp;JPEG&nbsp;using&nbsp;GD&nbsp;functions
<br>//&nbsp;*&nbsp;added&nbsp;@&nbsp;error-suppression&nbsp;to&nbsp;two&nbsp;lines&nbsp;where&nbsp;it&nbsp;checks:&nbsp;if&nbsp;($this-&gt;m_img-&gt;m_bTrans)
<br>//&nbsp;&nbsp;&nbsp;otherwise&nbsp;warnings&nbsp;are&nbsp;generated&nbsp;if&nbsp;error_reporting&nbsp;==&nbsp;E_ALL
<br>///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gif_loadFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iIndex&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)
<br>{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gif&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIF</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iIndex</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br>//&nbsp;Added&nbsp;by&nbsp;James&nbsp;Heinrich&nbsp;&lt;info@silisoftware.com&gt;&nbsp;-&nbsp;December&nbsp;10,&nbsp;2003
<br></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gif_loadFileToGDimageResource</span><span style="color: #007700">(</span><span style="color: #0000BB">$gifFilename</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br>{
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$gif&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">gif_loadFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$gifFilename</span><span style="color: #007700">))&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #DD0000">'set_time_limit'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;shouldn't&nbsp;take&nbsp;nearly&nbsp;this&nbsp;long
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">set_time_limit</span><span style="color: #007700">(</span><span style="color: #0000BB">120</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;general&nbsp;strategy:&nbsp;convert&nbsp;raw&nbsp;data&nbsp;to&nbsp;PNG&nbsp;then&nbsp;convert&nbsp;PNG&nbsp;data&nbsp;to&nbsp;GD&nbsp;image&nbsp;resource
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$PNGdata&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPng</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$img&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">imagecreatefromstring</span><span style="color: #007700">(</span><span style="color: #0000BB">$PNGdata</span><span style="color: #007700">))&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;excellent&nbsp;-&nbsp;PNG&nbsp;image&nbsp;data&nbsp;successfully&nbsp;converted&nbsp;to&nbsp;GD&nbsp;image
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$img</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$img&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getGD_PixelPlotterVersion</span><span style="color: #007700">())&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;problem:&nbsp;imagecreatefromstring()&nbsp;didn't&nbsp;like&nbsp;the&nbsp;PNG&nbsp;image&nbsp;data.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;This&nbsp;has&nbsp;been&nbsp;known&nbsp;to&nbsp;happen&nbsp;in&nbsp;PHP&nbsp;v4.0.6
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;solution:&nbsp;take&nbsp;the&nbsp;raw&nbsp;image&nbsp;data&nbsp;and&nbsp;create&nbsp;a&nbsp;new&nbsp;GD&nbsp;image&nbsp;and&nbsp;plot
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;pixel-by-pixel&nbsp;on&nbsp;the&nbsp;GD&nbsp;image.&nbsp;This&nbsp;is&nbsp;extremely&nbsp;slow,&nbsp;but&nbsp;it&nbsp;does
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;&nbsp;&nbsp;work&nbsp;and&nbsp;a&nbsp;slow&nbsp;solution&nbsp;is&nbsp;better&nbsp;than&nbsp;no&nbsp;solution,&nbsp;right?&nbsp;:)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$img</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gif_outputAsBmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br>{
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isset(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">)&nbsp;||&nbsp;(@</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">)&nbsp;&lt;&gt;&nbsp;</span><span style="color: #DD0000">'cgif'</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loaded</span><span style="color: #007700">()&nbsp;||&nbsp;(</span><span style="color: #0000BB">$lpszFileName&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fd&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$fd</span><span style="color: #007700">)&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$fh&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'wb'</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fd</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$fd</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fflush</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gif_outputAsPng</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br>{
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!isSet(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">)&nbsp;||&nbsp;(@</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">)&nbsp;&lt;&gt;&nbsp;</span><span style="color: #DD0000">'cgif'</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loaded</span><span style="color: #007700">()&nbsp;||&nbsp;(</span><span style="color: #0000BB">$lpszFileName&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fd&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPng</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$fd</span><span style="color: #007700">)&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$fh&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'wb'</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$fd</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$fd</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fflush</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gif_outputAsJpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)
<br>{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;JPEG&nbsp;output&nbsp;that&nbsp;does&nbsp;not&nbsp;require&nbsp;cjpeg&nbsp;added&nbsp;by&nbsp;James&nbsp;Heinrich&nbsp;&lt;info@silisoftware.com&gt;&nbsp;-&nbsp;December&nbsp;10,&nbsp;2003
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;((</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_OS</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">))&nbsp;!=&nbsp;</span><span style="color: #DD0000">'WIN'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'/usr/local/bin/cjpeg'</span><span style="color: #007700">)&nbsp;||&nbsp;`</span><span style="color: #DD0000">which&nbsp;cjpeg</span><span style="color: #007700">`))&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">gif_outputAsBmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.bmp'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'cjpeg&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.bmp&nbsp;&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;2&gt;/dev/null'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">.</span><span style="color: #DD0000">'.bmp'</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">unlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;either&nbsp;Windows,&nbsp;or&nbsp;cjpeg&nbsp;not&nbsp;found&nbsp;in&nbsp;path
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$img&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">imagecreatefromstring</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPng</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(@</span><span style="color: #0000BB">imagejpeg</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gif_getSize</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$width</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">)
<br>{
<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isSet(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(@</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">'cgif'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loaded</span><span style="color: #007700">())&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$width&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">width</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$height&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gif</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">height</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(@</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$myGIF&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIF</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$myGIF</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSize</span><span style="color: #007700">(</span><span style="color: #0000BB">$gif</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$width</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">CGIFLZW
<br></span><span style="color: #007700">{
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$MAX_LZW_BITS</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$Fresh</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$CodeSize</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$SetCodeSize</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$MaxCode</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$MaxCodeSize</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$FirstCode</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$OldCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$ClearCode</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$EndCode</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$Next</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$Vals</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$Stack</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$sp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$Buf</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$CurBit</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$LastBit</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$Done</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$LastByte</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;CONSTRUCTOR
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">279</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">deCompress</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$datLen</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$stLen&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;INITIALIZATION
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LZWCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;((</span><span style="color: #0000BB">$iIndex&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LZWCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">))&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$iIndex</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$stLen&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$iIndex&nbsp;</span><span style="color: #007700">!=&nbsp;-</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">LZWCommand</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">SetCodeSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CodeSize&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">SetCodeSize&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">SetCodeSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">EndCode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCodeSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">GetCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Fresh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Fresh</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Fresh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">GetCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">OldCode&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">--;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;((</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">GetCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">))&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CodeSize&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">SetCodeSize&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCodeSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">GetCode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">OldCode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">EndCode</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;-</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$InCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$Code</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCode</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">++;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">OldCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ClearCode</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$Code</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">++;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$Code</span><span style="color: #007700">])&nbsp;</span><span style="color: #FF8000">//&nbsp;Circular&nbsp;table&nbsp;entry,&nbsp;big&nbsp;GIF&nbsp;Error!
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$Code</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$Code</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">++;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$Code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCode</span><span style="color: #007700">)&nbsp;&lt;&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Next</span><span style="color: #007700">[</span><span style="color: #0000BB">$Code</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">OldCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Vals</span><span style="color: #007700">[</span><span style="color: #0000BB">$Code</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCode</span><span style="color: #007700">++;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCode&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCodeSize</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCodeSize&nbsp;</span><span style="color: #007700">&lt;&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MAX_LZW_BITS</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">MaxCodeSize&nbsp;</span><span style="color: #007700">*=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CodeSize</span><span style="color: #007700">++;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">OldCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$InCode</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">--;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Stack</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sp</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$Code</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">GetCode</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$bInit</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastBit&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Done&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastByte&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CodeSize</span><span style="color: #007700">)&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastBit</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Done</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastBit</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Ran&nbsp;off&nbsp;the&nbsp;end&nbsp;of&nbsp;my&nbsp;bits
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastByte&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">];
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastByte&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">];
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$Count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$Count</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$Count</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">[</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">$i</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$Count</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Done&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastByte&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$Count</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastBit</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastBit&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$Count</span><span style="color: #007700">)&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iRet&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CodeSize</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++,&nbsp;</span><span style="color: #0000BB">$j</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iRet&nbsp;</span><span style="color: #007700">|=&nbsp;((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Buf</span><span style="color: #007700">[</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)]&nbsp;&amp;&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)))&nbsp;!=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">$j</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CurBit&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">CodeSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$iRet</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">CGIFCOLORTABLE
<br></span><span style="color: #007700">{
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nColors</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_arColors</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;CONSTRUCTOR
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColors</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$num</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColors&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$num</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[]&nbsp;=&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">{</span><span style="color: #0000BB">2</span><span style="color: #007700">})&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">)&nbsp;+&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">{</span><span style="color: #0000BB">1</span><span style="color: #007700">})&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColors</span><span style="color: #007700">++;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">toString</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColors</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">.=
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x000000FF</span><span style="color: #007700">))&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;</span><span style="color: #FF8000">//&nbsp;R
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF00</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #FF8000">//&nbsp;G
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x00FF0000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">);&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;B
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">toRGBQuad</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColors</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">.=
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x00FF0000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #FF8000">//&nbsp;B
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF00</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #FF8000">//&nbsp;G
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x000000FF</span><span style="color: #007700">))&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;</span><span style="color: #FF8000">//&nbsp;R
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">colorIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$rgb</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0xFFFFFF</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r1&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$g1&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x00FF00</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b1&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$rgb&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF0000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$idx&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColors</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$r2&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x000000FF</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$g2&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x0000FF00</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b2&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_arColors</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x00FF0000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$r2&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$r1</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$g2&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$g1</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">abs</span><span style="color: #007700">(</span><span style="color: #0000BB">$b2&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$b1</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$idx&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$d&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$dif</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$idx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dif&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$idx</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">CGIFFILEHEADER
<br></span><span style="color: #007700">{
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_lpVer</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nWidth</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nHeight</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bGlobalClr</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nColorRes</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bSorted</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nBgColor</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nPixelRatio</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_colorTable</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;CONSTRUCTOR
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpVer</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bGlobalClr</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColorRes</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bSorted</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nPixelRatio</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$hdrLen</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hdrLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpVer&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpVer&nbsp;</span><span style="color: #007700">&lt;&gt;&nbsp;</span><span style="color: #DD0000">'GIF87a'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpVer&nbsp;</span><span style="color: #007700">&lt;&gt;&nbsp;</span><span style="color: #DD0000">'GIF89a'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bGlobalClr&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x80</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nColorRes&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x70</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bSorted&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x08</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x07</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">11</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nPixelRatio&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hdrLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">13</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bGlobalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFCOLORTABLE</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$hdrLen</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hdrLen&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;+&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">CGIFIMAGEHEADER
<br></span><span style="color: #007700">{
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nLeft</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nTop</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nWidth</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nHeight</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bLocalClr</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bInterlace</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bSorted</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_colorTable</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;CONSTRUCTOR
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLocalClr</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bInterlace</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bSorted</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$hdrLen</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hdrLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">{</span><span style="color: #0000BB">8</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLocalClr&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x80</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bInterlace&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x40</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bSorted&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x20</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x07</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hdrLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLocalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFCOLORTABLE</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$hdrLen</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hdrLen&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;+&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">CGIFIMAGE
<br></span><span style="color: #007700">{
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_disp</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bUser</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bTrans</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nDelay</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_nTrans</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_lpComm</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_gih</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_data</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_lzw</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_disp</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bUser</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bTrans</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nDelay</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTrans</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpComm</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unSet(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFIMAGEHEADER</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lzw&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFLZW</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$datLen</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen</span><span style="color: #007700">++;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$b</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0x21</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Extension
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skipExt</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0x2C</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Image
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;LOAD&nbsp;HEADER&nbsp;&amp;&nbsp;COLOR&nbsp;TABLE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ALLOC&nbsp;BUFFER
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lzw</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deCompress</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$datLen&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bInterlace</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">deInterlace</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0x3B</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;EOF
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">default:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">skipExt</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$extLen</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extLen</span><span style="color: #007700">++;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$b</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0xF9</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Graphic&nbsp;Control
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">1</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_disp&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x1C</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bUser&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x02</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bTrans&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x01</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nDelay&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTrans&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">4</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0xFE</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Comment
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpComm&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">}));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0x01</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Plain&nbsp;text
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">:&nbsp;</span><span style="color: #FF8000">//&nbsp;Application
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;SKIP&nbsp;DEFAULT&nbsp;AS&nbsp;DEFS&nbsp;MAY&nbsp;CHANGE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extLen</span><span style="color: #007700">++;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">$b&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extLen&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$b&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">0</span><span style="color: #007700">});
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$extLen</span><span style="color: #007700">++;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">w2i</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;+&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">deInterlace</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$i</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">:
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$s&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$s</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lne&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">)&nbsp;.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lne&nbsp;</span><span style="color: #007700">.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;*&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br>
<br></span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////////////////////////////
<br>
<br></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">CGIF
<br></span><span style="color: #007700">{
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_gfh</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_lpData</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_img</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;</span><span style="color: #0000BB">$m_bLoaded</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;CONSTRUCTOR
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFFILEHEADER</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFIMAGE</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLoaded&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">loadFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$iIndex</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$iIndex&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;READ&nbsp;FILE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!(</span><span style="color: #0000BB">$fh&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">,&nbsp;@</span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;GET&nbsp;FILE&nbsp;HEADER
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$imgLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpData</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$imgLen</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">$iIndex</span><span style="color: #007700">--&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLoaded&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getSize</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$width</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$height</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$fh&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">,&nbsp;@</span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$lpszFileName</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$gfh&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">CGIFFILEHEADER</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$len&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$width&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$height&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getBmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLoaded</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PREPARE&nbsp;COLOR&nbsp;TABLE&nbsp;(RGBQUADs)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLocalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rgbq&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toRGBQuad</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">colorIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bGlobalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rgbq&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toRGBQuad</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">colorIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">=&nbsp;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rgbq&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PREPARE&nbsp;BITMAP&nbsp;BITS
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nPxl&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;*&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nPad&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">4&nbsp;</span><span style="color: #007700">-&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">++,&nbsp;</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft</span><span style="color: #007700">)&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop</span><span style="color: #007700">)&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">))&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop&nbsp;&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PART&nbsp;OF&nbsp;IMAGE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(@</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bTrans&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">})&nbsp;==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTrans</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;TRANSPARENT&nbsp;-&gt;&nbsp;BACKGROUND
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">};
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;BACKGROUND
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nPxl&nbsp;</span><span style="color: #007700">-=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;ADD&nbsp;PADDING
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$nPad</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;BITMAPFILEHEADER
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'BM'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">14&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">40&nbsp;</span><span style="color: #007700">+&nbsp;(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bmp</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">14&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">40&nbsp;</span><span style="color: #007700">+&nbsp;(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;BITMAPINFOHEADER
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">40</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x01\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x08\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x12\x0B\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x12\x0B\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">256</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00\x00\x00"</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;COLOR&nbsp;TABLE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$rgbq</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;DATA
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$bmp</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$out</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getPng</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLoaded</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PREPARE&nbsp;COLOR&nbsp;TABLE&nbsp;(RGBQUADs)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLocalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toString</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">colorIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bGlobalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTableSize</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toString</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">!=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">colorIndex</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">=&nbsp;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">=&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PREPARE&nbsp;BITMAP&nbsp;BITS
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nPxl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">++,&nbsp;</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft</span><span style="color: #007700">)&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop</span><span style="color: #007700">)&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">))&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop&nbsp;&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PART&nbsp;OF&nbsp;IMAGE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">};
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;BACKGROUND
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$bgColor&nbsp;</span><span style="color: #007700">==&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bgColor</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bmp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">gzcompress</span><span style="color: #007700">(</span><span style="color: #0000BB">$bmp</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">9</span><span style="color: #007700">);
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;SIGNATURE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x89\x50\x4E\x47\x0D\x0A\x1A\x0A"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;HEADER
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00\x00\x0D"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'IHDR'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x08\x03\x00\x00\x00"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;PALETTE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'PLTE'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$pal</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;TRANSPARENCY
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(@</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bTrans&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$nColors&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">$nColors</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'tRNS'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$nColors</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;</span><span style="color: #007700">.=&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTrans</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">"\x00"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">"\xFF"</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;DATA&nbsp;BITS
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bmp</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'IDAT'</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tmp&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$bmp</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp</span><span style="color: #007700">));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;END&nbsp;OF&nbsp;FILE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$out&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"\x00\x00\x00\x00IEND\xAE\x42\x60\x82"</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$out</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Added&nbsp;by&nbsp;James&nbsp;Heinrich&nbsp;&lt;info@silisoftware.com&gt;&nbsp;-&nbsp;January&nbsp;5,&nbsp;2003
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Takes&nbsp;raw&nbsp;image&nbsp;data&nbsp;and&nbsp;plots&nbsp;it&nbsp;pixel-by-pixel&nbsp;on&nbsp;a&nbsp;new&nbsp;GD&nbsp;image&nbsp;and&nbsp;returns&nbsp;that
<br>&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;It's&nbsp;extremely&nbsp;slow,&nbsp;but&nbsp;the&nbsp;only&nbsp;solution&nbsp;when&nbsp;imagecreatefromstring()&nbsp;fails
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getGD_PixelPlotterVersion</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLoaded</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PREPARE&nbsp;COLOR&nbsp;TABLE&nbsp;(RGBQUADs)
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLocalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toString</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bGlobalClr</span><span style="color: #007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_colorTable</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toString</span><span style="color: #007700">();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'No&nbsp;color&nbsp;table&nbsp;available&nbsp;in&nbsp;getGD_PixelPlotterVersion()'</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$PlottingIMG&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">imagecreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$NumColorsInPal&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">floor</span><span style="color: #007700">(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$pal</span><span style="color: #007700">)&nbsp;/&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ThisImageColor&nbsp;</span><span style="color: #007700">=&nbsp;array();
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$NumColorsInPal</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ThisImageColor</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">imagecolorallocate</span><span style="color: #007700">(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$PlottingIMG</span><span style="color: #007700">,
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$pal</span><span style="color: #007700">{((</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)}),
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$pal</span><span style="color: #007700">{((</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)}),
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$pal</span><span style="color: #007700">{((</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)}));
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PREPARE&nbsp;BITMAP&nbsp;BITS
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_data</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nPxl&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;*&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$y</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">phpthumb_functions</span><span style="color: #007700">::</span><span style="color: #0000BB">FunctionIsDisabled</span><span style="color: #007700">(</span><span style="color: #DD0000">'set_time_limit'</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">set_time_limit</span><span style="color: #007700">(</span><span style="color: #0000BB">30</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">++,&nbsp;</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">++)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft</span><span style="color: #007700">)&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop</span><span style="color: #007700">)&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$x&nbsp;</span><span style="color: #007700">&lt;&nbsp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nLeft&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">))&nbsp;&amp;&amp;
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">&lt;&nbsp;&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTop&nbsp;&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gih</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">)))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PART&nbsp;OF&nbsp;IMAGE
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(@</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bTrans&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">})&nbsp;==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nTrans</span><span style="color: #007700">))&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$PlottingIMG</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ThisImageColor</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$PlottingIMG</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ThisImageColor</span><span style="color: #007700">[</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">{</span><span style="color: #0000BB">$nPxl</span><span style="color: #007700">})]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;BACKGROUND
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">imagesetpixel</span><span style="color: #007700">(</span><span style="color: #0000BB">$PlottingIMG</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$y&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ThisImageColor</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nBgColor</span><span style="color: #007700">]);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$nPxl&nbsp;</span><span style="color: #007700">-=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$PlottingIMG</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">dword</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">).</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF00</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">).</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF0000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">).</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF000000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">ndword</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">)
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF000000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">).</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF0000</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">).</span><span style="color: #0000BB">chr</span><span style="color: #007700">((</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF00</span><span style="color: #007700">)&nbsp;&gt;&gt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">).</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0xFF</span><span style="color: #007700">);
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">width</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nWidth</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">height</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_gfh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_nHeight</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">comment</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_img</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_lpComm</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">///////////////////////////////////////////////////////////////////////////
<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">loaded</span><span style="color: #007700">()
<br>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">m_bLoaded</span><span style="color: #007700">;
<br>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>}
<br></span>
</span>
</code></body></html>