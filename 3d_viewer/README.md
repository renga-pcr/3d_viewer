# 3d_viewer

Documentation of 3D Viewer:

Javascript Library: threed.js

Css Library: threed.css

Usage: (direct method)

                    Download the 3d_viewer.php and include in your root directory. it works when You directly run this php in URL.

Usage: (iFrame method)

                    <iframe style="width:400px;height:328px;" class="render-viewer" src="/3d_viewer.php?stl_image=[filename with location here]" sandbox="allow-scripts allow-same-origin"></iframe>

                    You can customize width & height if You set iframe width and height.

3d_viewer.php code review:

Line 3: css library file

Line 10 - 14 : 3d view model options(normal,solid,wireframe)

Line 15 : Download the 3d file (place valid filename with location in "href" attribute )

Line 29 : 3d viewer (place valid filename with location in "data-file" attribute )

Line 33 : Js Library 