<h3>Graphics Programming (OpenGL)</h3>
<p>The focus of this calculus-intensive course is to provide a broad understanding of the technologies and mathematical skills used in graphical programming. Graphical projects in this course utilize OpenGL and Glut.</p>

<h3>OpenGL Height-Map:</h3>
<p>The first project of CMPSC 458 required the implementation of a 3-dimensional height map based on the color intensity of each pixel in an image. This map is surrounded by a textured skybox environment which can be rotated freely by the user. Additionally, the viewing user can translate and scale the height map or change to different input images.

<br><br>

To implement this design, I looped over each pixel value and calculated a height index based on the color intensity at that location.
</p>

<h3>OpenGL Roller Coaster:</h3>

</p>For our second project, I designed a 3D roller coaster track using OpenGL.  First, I laid out the shape of a track with carefully placed control points.  The control points were then converted into a single-rail system using catmull-rom spline blending and GL_Quads.  To create the other rail, I simply took the cross product of each normalized vector with the unit up-vector and interpolated the resulting vectors.

The scene incorporated basic OpenGL lighting and texturing properties for added realism.  Additionally, I implemented basic physics to control the speed of the run and simulate camera movement.  In reality, the box is translating each point to the center and the stationary camera is simply looking around each corner to the following point.</p>