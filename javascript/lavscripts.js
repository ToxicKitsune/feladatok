
            

            function openOrCloseMenu() {
                var divContent = document.getElementById('loadedContent');
                // Check if content is already loaded
                if (divContent.innerHTML === '') {
                    // If div is empty, load content
                    divContent.innerHTML = '<ul class = "nav-bar-mobile"><li class = "nav-component btn pxl-font "><a href="index.php?content_id=about">About me</a></li><li class = "nav-component btn pxl-font "><a href="index.php?content_id=ora">Class schedule</a></li><li class = "nav-component btn pxl-font "><a href="index.php?content_id=naptar">Calendar</a></li><li class = "nav-component btn pxl-font "><a href="index.php?content_id=gallery">Gallery</a></li><li class = "nav-component btn pxl-font "><a href="index.php?content_id=videos&video_id=train">Videos</a></li></ul>';
                }else{
                    divContent.innerHTML= '';
                }
            }