<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DneproFarm</title>

    <!--Styles-->
    <link rel="stylesheet" href="css/libs.min.css" type="text/css">
    <link rel="stylesheet" href="css/styles.min.css" type="text/css">
</head>
<body>

<div id="vue-menu">
    <div v-if="show" class="darkside"></div>
    <div v-if="show"  class="menu_mob">
        <div class="menu__close" @click="show = !show">
            <img src="images/x-circle.png" alt="Закрити">
        </div>
        <div class="content">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="d-flex input_container">
                <input type="text" name="find" class="menu__field" required placeholder="Пошук по сайту" id="">
                <div class="svg_container">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
                        <metadata>
                        <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
                        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                        <rdf:Description rdf:about=""/>
                        </rdf:RDF>
                        </x:xmpmeta>      
                        </metadata>
                        <image id="noun_Search_2284634_000000" width="15" height="15" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA21BMVEX///9qqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEIAAAATkTccAAAAR3RSTlMADEVYOgUGi/fqZL6DKRE2oomE+DxwRwn0gLrCRB5a/Qte+TUiUUgYG5Xgst0QL3oh7s8tTuulAy7Z02WaAa2QQ1v+k2lBD01btK4AAAABYktHREjwAtTqAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wcECzImUm62pgAAAJNJREFUCNdVjsUSwkAQRCcECS5BFwkuwSF4cOn//yM2m91D+tCv3tTU1BDxaCE9HCGVaMwAEE8oTRqpdCabQ973glkULKHsoVKtyUVW97qBpvSW1ebd6aq7PfR5D6BJH2LEewxd+sQWmM7mggtzKbhab7Yczg77gxgcTzgzG+xiuVf/Q9293R9Ez9ebAvnACQ6+vz+1ZQ6zhEPqFwAAAABJRU5ErkJggg=="/>
                    </svg>
                </div>
            </div>

            <div class="navigation">
                <nav>
                    <ul>
                        <a href="#"><li>Про компанію</li></a>
                        <a href="#"><li>Тест-набори</li></a>
                        <a href="#"><li>Послуги</li></a>
                        <a href="#"><li>Видаткові матеріали</li></a>
                        <a href="#"><li>Партнери</li></a>
                        <a href="#"><li>Контакти</li></a>
                    </ul>
                </nav>
            </div>

            <div class="contacts">
                                    <div class="contact d-flex">
                                        <div class="svg_container">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16">
                                            <metadata>
                                            <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
                                            <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                                <rdf:Description rdf:about=""/>
                                            </rdf:RDF>
                                            </x:xmpmeta></metadata>
                                            <image id="Шар_10" data-name="Шар 10" width="17" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAMAAADH72RtAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEWPwCKPvyGPvyKOvyGQwCOEug2mzVD3+/Df7L+01GqQvySPvyKPvyGPvyKPvyGPwCKPvyKPvyGPvyKPvyGPvyGPvyGPvyGPwCKPvyKPvyKPwCKPvyGPvyGPvyKPvyGPwCKPvyGPvyKPvyKPvyGPvyKOvyGPwCKPvyGPvyKPvyGPvyKPvyGPvyGPvyGOvyKPvyKPvyGPvyKPwCKPwCKQwCOPvyGPvyKPvyKPwCGPvyKPvyKPvyKPwCKPvyGPvyKPvyKPvyGPvyKHvBSPvyKOvx+PwCKPvyGPvyKPvyKPwCKPvyKPvyKPvyKPvyGPvyGjy0mJvRiTwiqnzFGNvh2PvyKPvyKPvyGPwCKPvyKPvyGPvyH////7/fiv0mCXxDK+2n+92XyGuxGPvyKPwCKPvyKPvyGPvyGPvyLo8tKYxDSqzVXQ5KGWwy+KvBaPvyKPwCKPvyKPvyH////////F3oyMvRu62HaaxjeMvRyPvyGPvyKPvyL///////////+92X2GuhDB24WKvBiPvyKPwCKPvyKPvyH////////////+/vy62HiJvBaSwCaPvyKPwCKPvyGPwCKPvyH////////////////7/fe62HiMvh6PvySPvyGPwCKPvyH////6/Pa513SMvhyOwCGPvyGPvyL////8/fm01GuLvRqPwCGPvyGPvyKPvyKPvyL///+y1GeIuxSKvRmPvyKPvyKPwCKPvyIAAADNgmkJAAAAtnRSTlMAAAAAAAAAAAAAACIrGykZBjzl5mSB3diePhDTnnnzWw0qWbbyfANT5hCEMEuPUgRh9nsCY9gHNflSSLHguxRb9UA55xC2sBAIL73AA60JBMyLC8ejKeFhQeAhEw5q6yxG8WmarBzkQxvBwAZv80xahRIXET7qi4jvRgECIhUOZvZrlPFXSwcoHBQLgPphg+eunAMmJRkPC4P0cz9R6ScMb+qleR0dEEXF5Epu3A0QC2G/4N2DC3QupiEAAAABYktHRLaqBwvxAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wcEDAUBYiy1fAAAASJJREFUGNNjYGBg5OZhZGDk5eMXYGJmAANBIWERBkZRMXEJSYiIlLSMrJw8o4KikrKKqhpQgEVdQ5NJS0NbR1dP38DQyJiBgdXE1IzJ3MLSytrG1s7ewZGJgc3JmcfF1c2dycPTy9vH19ePgd0/IDAoOISRkYkhNCw8IjKKITomNi4+ITGJkZGBITklNS2dITo6IzMrOyc3DyiSX1AYYs5QFF1cUlrGUV5RycBUxcRYzcRQUxtdV9/QyNnU3NLqK9oGNK69o7O4q7unl6tPrn+CxsRJTAyTp0ztnDZ9xsxZDLPnCKTP7RNgmDyvprZ22vwFCxfZAV2wWG4Jw+TJ85Z2dhYvW75ipe6q1WtS1jLMmzdv8tTOzuh16zds3LR5y1YmAOWjUPVNddDTAAAAAElFTkSuQmCC"/>
                                            </svg>

                                        </div>
                                        <div class="phone">
                                            <a href="tel:(056)372-57-54"> (056) 372-57-54</a>
                                        </div>
                                    </div>

                                    <div class="contact d-flex">
                                        <div class="svg_container">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16">
                                            <metadata>
                                            <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
                                            <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                                <rdf:Description rdf:about=""/>
                                            </rdf:RDF>
                                            </x:xmpmeta></metadata>
                                            <image id="Шар_10" data-name="Шар 10" width="17" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAMAAADH72RtAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEWPwCKPvyGPvyKOvyGQwCOEug2mzVD3+/Df7L+01GqQvySPvyKPvyGPvyKPvyGPwCKPvyKPvyGPvyKPvyGPvyGPvyGPvyGPwCKPvyKPvyKPwCKPvyGPvyGPvyKPvyGPwCKPvyGPvyKPvyKPvyGPvyKOvyGPwCKPvyGPvyKPvyGPvyKPvyGPvyGPvyGOvyKPvyKPvyGPvyKPwCKPwCKQwCOPvyGPvyKPvyKPwCGPvyKPvyKPvyKPwCKPvyGPvyKPvyKPvyGPvyKHvBSPvyKOvx+PwCKPvyGPvyKPvyKPwCKPvyKPvyKPvyKPvyGPvyGjy0mJvRiTwiqnzFGNvh2PvyKPvyKPvyGPwCKPvyKPvyGPvyH////7/fiv0mCXxDK+2n+92XyGuxGPvyKPwCKPvyKPvyGPvyGPvyLo8tKYxDSqzVXQ5KGWwy+KvBaPvyKPwCKPvyKPvyH////////F3oyMvRu62HaaxjeMvRyPvyGPvyKPvyL///////////+92X2GuhDB24WKvBiPvyKPwCKPvyKPvyH////////////+/vy62HiJvBaSwCaPvyKPwCKPvyGPwCKPvyH////////////////7/fe62HiMvh6PvySPvyGPwCKPvyH////6/Pa513SMvhyOwCGPvyGPvyL////8/fm01GuLvRqPwCGPvyGPvyKPvyKPvyL///+y1GeIuxSKvRmPvyKPvyKPwCKPvyIAAADNgmkJAAAAtnRSTlMAAAAAAAAAAAAAACIrGykZBjzl5mSB3diePhDTnnnzWw0qWbbyfANT5hCEMEuPUgRh9nsCY9gHNflSSLHguxRb9UA55xC2sBAIL73AA60JBMyLC8ejKeFhQeAhEw5q6yxG8WmarBzkQxvBwAZv80xahRIXET7qi4jvRgECIhUOZvZrlPFXSwcoHBQLgPphg+eunAMmJRkPC4P0cz9R6ScMb+qleR0dEEXF5Epu3A0QC2G/4N2DC3QupiEAAAABYktHRLaqBwvxAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wcEDAUBYiy1fAAAASJJREFUGNNjYGBg5OZhZGDk5eMXYGJmAANBIWERBkZRMXEJSYiIlLSMrJw8o4KikrKKqhpQgEVdQ5NJS0NbR1dP38DQyJiBgdXE1IzJ3MLSytrG1s7ewZGJgc3JmcfF1c2dycPTy9vH19ePgd0/IDAoOISRkYkhNCw8IjKKITomNi4+ITGJkZGBITklNS2dITo6IzMrOyc3DyiSX1AYYs5QFF1cUlrGUV5RycBUxcRYzcRQUxtdV9/QyNnU3NLqK9oGNK69o7O4q7unl6tPrn+CxsRJTAyTp0ztnDZ9xsxZDLPnCKTP7RNgmDyvprZ22vwFCxfZAV2wWG4Jw+TJ85Z2dhYvW75ipe6q1WtS1jLMmzdv8tTOzuh16zds3LR5y1YmAOWjUPVNddDTAAAAAElFTkSuQmCC"/>
                                            </svg>

                                        </div>
                                        <div class="phone">
                                            <a href="tel:(095)792-20-23"> (095) 792-20-23</a>
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>






<div class="back-img">
    <header class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <img src="images/logo.png" alt="Логотип">
                    </div>
                    <div class="burger showMob" @click="show = !show">
                        <img src="images/burger.png" alt="Меню">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-9 showDesk">
                    <div class="content">
                        <div class="upper d-flex">
                            <div class="find d-flex">
                                <input type="text" name="find" class="upper__field" placeholder="Пошук по сайту" id="">
                                <!-- <img src="images/zoom.svg" alt="Пошук"> -->
                                <div class="svg_container">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
                                <metadata>
                                <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
                                <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                    <rdf:Description rdf:about=""/>
                                </rdf:RDF>
                                </x:xmpmeta>      
                                </metadata>
                                <image id="noun_Search_2284634_000000" width="15" height="15" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA21BMVEX///9qqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEJqqEIAAAATkTccAAAAR3RSTlMADEVYOgUGi/fqZL6DKRE2oomE+DxwRwn0gLrCRB5a/Qte+TUiUUgYG5Xgst0QL3oh7s8tTuulAy7Z02WaAa2QQ1v+k2lBD01btK4AAAABYktHREjwAtTqAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wcECzImUm62pgAAAJNJREFUCNdVjsUSwkAQRCcECS5BFwkuwSF4cOn//yM2m91D+tCv3tTU1BDxaCE9HCGVaMwAEE8oTRqpdCabQ973glkULKHsoVKtyUVW97qBpvSW1ebd6aq7PfR5D6BJH2LEewxd+sQWmM7mggtzKbhab7Yczg77gxgcTzgzG+xiuVf/Q9293R9Ez9ebAvnACQ6+vz+1ZQ6zhEPqFwAAAABJRU5ErkJggg=="/>
                                </svg>
                                </div>
                            </div>

                            <div class="contacts">
                                <div class="contact d-flex">
                                    <div class="svg_container">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16">
                                        <metadata>
                                        <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
                                        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                            <rdf:Description rdf:about=""/>
                                        </rdf:RDF>
                                        </x:xmpmeta></metadata>
                                        <image id="Шар_10" data-name="Шар 10" width="17" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAMAAADH72RtAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEWPwCKPvyGPvyKOvyGQwCOEug2mzVD3+/Df7L+01GqQvySPvyKPvyGPvyKPvyGPwCKPvyKPvyGPvyKPvyGPvyGPvyGPvyGPwCKPvyKPvyKPwCKPvyGPvyGPvyKPvyGPwCKPvyGPvyKPvyKPvyGPvyKOvyGPwCKPvyGPvyKPvyGPvyKPvyGPvyGPvyGOvyKPvyKPvyGPvyKPwCKPwCKQwCOPvyGPvyKPvyKPwCGPvyKPvyKPvyKPwCKPvyGPvyKPvyKPvyGPvyKHvBSPvyKOvx+PwCKPvyGPvyKPvyKPwCKPvyKPvyKPvyKPvyGPvyGjy0mJvRiTwiqnzFGNvh2PvyKPvyKPvyGPwCKPvyKPvyGPvyH////7/fiv0mCXxDK+2n+92XyGuxGPvyKPwCKPvyKPvyGPvyGPvyLo8tKYxDSqzVXQ5KGWwy+KvBaPvyKPwCKPvyKPvyH////////F3oyMvRu62HaaxjeMvRyPvyGPvyKPvyL///////////+92X2GuhDB24WKvBiPvyKPwCKPvyKPvyH////////////+/vy62HiJvBaSwCaPvyKPwCKPvyGPwCKPvyH////////////////7/fe62HiMvh6PvySPvyGPwCKPvyH////6/Pa513SMvhyOwCGPvyGPvyL////8/fm01GuLvRqPwCGPvyGPvyKPvyKPvyL///+y1GeIuxSKvRmPvyKPvyKPwCKPvyIAAADNgmkJAAAAtnRSTlMAAAAAAAAAAAAAACIrGykZBjzl5mSB3diePhDTnnnzWw0qWbbyfANT5hCEMEuPUgRh9nsCY9gHNflSSLHguxRb9UA55xC2sBAIL73AA60JBMyLC8ejKeFhQeAhEw5q6yxG8WmarBzkQxvBwAZv80xahRIXET7qi4jvRgECIhUOZvZrlPFXSwcoHBQLgPphg+eunAMmJRkPC4P0cz9R6ScMb+qleR0dEEXF5Epu3A0QC2G/4N2DC3QupiEAAAABYktHRLaqBwvxAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wcEDAUBYiy1fAAAASJJREFUGNNjYGBg5OZhZGDk5eMXYGJmAANBIWERBkZRMXEJSYiIlLSMrJw8o4KikrKKqhpQgEVdQ5NJS0NbR1dP38DQyJiBgdXE1IzJ3MLSytrG1s7ewZGJgc3JmcfF1c2dycPTy9vH19ePgd0/IDAoOISRkYkhNCw8IjKKITomNi4+ITGJkZGBITklNS2dITo6IzMrOyc3DyiSX1AYYs5QFF1cUlrGUV5RycBUxcRYzcRQUxtdV9/QyNnU3NLqK9oGNK69o7O4q7unl6tPrn+CxsRJTAyTp0ztnDZ9xsxZDLPnCKTP7RNgmDyvprZ22vwFCxfZAV2wWG4Jw+TJ85Z2dhYvW75ipe6q1WtS1jLMmzdv8tTOzuh16zds3LR5y1YmAOWjUPVNddDTAAAAAElFTkSuQmCC"/>
                                        </svg>

                                    </div>
                                    <div class="phone">
                                        <a href="tel:(056)372-57-54"> (056) 372-57-54</a>
                                    </div>
                                </div>

                                <div class="contact d-flex">
                                    <div class="svg_container">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16">
                                        <metadata>
                                        <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c142 79.160924, 2017/07/13-01:06:39        ">
                                        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                            <rdf:Description rdf:about=""/>
                                        </rdf:RDF>
                                        </x:xmpmeta></metadata>
                                        <image id="Шар_10" data-name="Шар 10" width="17" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAMAAADH72RtAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACJVBMVEWPwCKPvyGPvyKOvyGQwCOEug2mzVD3+/Df7L+01GqQvySPvyKPvyGPvyKPvyGPwCKPvyKPvyGPvyKPvyGPvyGPvyGPvyGPwCKPvyKPvyKPwCKPvyGPvyGPvyKPvyGPwCKPvyGPvyKPvyKPvyGPvyKOvyGPwCKPvyGPvyKPvyGPvyKPvyGPvyGPvyGOvyKPvyKPvyGPvyKPwCKPwCKQwCOPvyGPvyKPvyKPwCGPvyKPvyKPvyKPwCKPvyGPvyKPvyKPvyGPvyKHvBSPvyKOvx+PwCKPvyGPvyKPvyKPwCKPvyKPvyKPvyKPvyGPvyGjy0mJvRiTwiqnzFGNvh2PvyKPvyKPvyGPwCKPvyKPvyGPvyH////7/fiv0mCXxDK+2n+92XyGuxGPvyKPwCKPvyKPvyGPvyGPvyLo8tKYxDSqzVXQ5KGWwy+KvBaPvyKPwCKPvyKPvyH////////F3oyMvRu62HaaxjeMvRyPvyGPvyKPvyL///////////+92X2GuhDB24WKvBiPvyKPwCKPvyKPvyH////////////+/vy62HiJvBaSwCaPvyKPwCKPvyGPwCKPvyH////////////////7/fe62HiMvh6PvySPvyGPwCKPvyH////6/Pa513SMvhyOwCGPvyGPvyL////8/fm01GuLvRqPwCGPvyGPvyKPvyKPvyL///+y1GeIuxSKvRmPvyKPvyKPwCKPvyIAAADNgmkJAAAAtnRSTlMAAAAAAAAAAAAAACIrGykZBjzl5mSB3diePhDTnnnzWw0qWbbyfANT5hCEMEuPUgRh9nsCY9gHNflSSLHguxRb9UA55xC2sBAIL73AA60JBMyLC8ejKeFhQeAhEw5q6yxG8WmarBzkQxvBwAZv80xahRIXET7qi4jvRgECIhUOZvZrlPFXSwcoHBQLgPphg+eunAMmJRkPC4P0cz9R6ScMb+qleR0dEEXF5Epu3A0QC2G/4N2DC3QupiEAAAABYktHRLaqBwvxAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wcEDAUBYiy1fAAAASJJREFUGNNjYGBg5OZhZGDk5eMXYGJmAANBIWERBkZRMXEJSYiIlLSMrJw8o4KikrKKqhpQgEVdQ5NJS0NbR1dP38DQyJiBgdXE1IzJ3MLSytrG1s7ewZGJgc3JmcfF1c2dycPTy9vH19ePgd0/IDAoOISRkYkhNCw8IjKKITomNi4+ITGJkZGBITklNS2dITo6IzMrOyc3DyiSX1AYYs5QFF1cUlrGUV5RycBUxcRYzcRQUxtdV9/QyNnU3NLqK9oGNK69o7O4q7unl6tPrn+CxsRJTAyTp0ztnDZ9xsxZDLPnCKTP7RNgmDyvprZ22vwFCxfZAV2wWG4Jw+TJ85Z2dhYvW75ipe6q1WtS1jLMmzdv8tTOzuh16zds3LR5y1YmAOWjUPVNddDTAAAAAElFTkSuQmCC"/>
                                        </svg>

                                    </div>
                                    <div class="phone">
                                        <a href="tel:(095)792-20-23"> (095) 792-20-23</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="menu">
                            <nav>
                                <ul class="nav__list d-flex">
                                    <a href="#"><li class="nav__item">Про компанію</li></a>
                                    <a href="#"><li class="nav__item">Тест-набори</li></a>
                                    <a href="#"><li class="nav__item">Послуги</li></a>
                                    <a href="#"><li class="nav__item">Видаткові матеріали</li></a>
                                    <a href="#"><li class="nav__item">Партнери</li></a>
                                    <a href="#"><li class="nav__item">Контакти</li></a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="slider" id="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="slider__title">
                        Лідер на ветеринарному 
                        ринку України
                    </h1>

                    <p class="slider__text">
                        Наш продукт являється одним з найкращих 
                        на просторах рідного краю.
                    </p>

                    <button class="slider__btn">
                        детальніше
                    </button>

                    <div class="slider-nav d-flex">
                        <div class="slider__pages_active">

                        </div>

                        <div class="slider__pages">
                            
                        </div>

                        <div class="slider__pages">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>