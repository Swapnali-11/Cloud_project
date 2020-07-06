#include<stdlib.h>
#include<time.h>
#include<string.h>
#include<GL/glut.h>
#include<stdio.h>
	
#define duckcount 50
	
float	duckx[duckcount],	ducky[duckcount],	duckxdir[duckcount],	duckydir[duckcount];
int	duckalive[duckcount];
	
float	cursorx,	cursory;
int	score;
char	buffer[10];
	
void	initgame()
{
	int i;

	srand(time(NULL));
	score	=	0;
	for(i	=	0;	i	<=	duckcount	-	1;	i++)
	{
		duckalive[i]	=	1;
																		duckx[i]	=	rand()	%	640;
																		ducky[i]	=	rand()	%	350;
		
																		if(rand()	%	2	==	0)
																										duckxdir[i]	=	3;
																		else
																										duckxdir[i]	=	-3;
		
		
																		if(rand()	%	2	==	0)
																										duckydir[i]	=	3;
																		else
																										duckydir[i]	=	3;
										}
		}
		
		void	keypress(unsigned	char	key,	int	x,	int	y	){
						switch(key){
										case	'w':
										break;
										case	'a':
										break;
										case	's':
										break;
										case	'd':
										break;
										case	'c':
										break;
										case	27:exit(0);
										}
										glutPostRedisplay();
		}
		
		void	shoot(int	button,	int	state,	int	x,	int	y)
		{
			int	hit	=	0, i,j;
			if(button	==	GLUT_LEFT_BUTTON	&&	state	==	GLUT_DOWN)
			{
				for(i	=	0;	i	<=	duckcount	-	1;	i++)
				{
																										if(duckalive[i])
																										{
																																		if(x	>	duckx[i]	-	15	&&	x	<	duckx[i]	+	15	&&	y	<	ducky[i]	+	10	&&	y	>	ducky[i]	-	10	)
																																		{
																																										score	=	score	+	5;
																																										duckalive[i]	=	0;																																									hit	=	1;
																																		}
																										}
																		}
		
																		for(j	=	0;	j	<=	10;	j++)
																		{
																										glBegin(GL_QUADS);
																																		if(hit	==	0)
																																										glColor3f(1,	1,	0);
																																		if(hit	==	1)
																																										glColor3f(1,	0.25,	0);
																																		glVertex2f	(x,	y	-	8);
																																		glVertex2f	(x	-	8,	y);
																																		glVertex2f	(x,	y	+	8);
																																		glVertex2f	(x	+	8,	y);
																										glEnd();
																										glutSwapBuffers();
																		}
										}
		}
		
		void	setcursor(int	x,	int	y)
		{
										cursorx	=	x;
										cursory	=	y;
		}
		
	void	drawcursor()
	{
									glBegin(GL_LINE_LOOP);
																	glColor3f(1,	1,	1);
																	glVertex2f	(cursorx	-	5,	cursory	-	5);
									glVertex2f	(cursorx	-	5,	cursory	+	5);
									glVertex2f	(cursorx	+	5,	cursory	+	5);
									glVertex2f	(cursorx	+	5,	cursory	-	5);
																	glVertex2f	(cursorx	-	5,	cursory	-	5);
									glEnd();
	
									glBegin(GL_LINES);
																	glColor3f(1,	1,	1);
																	glVertex2f	(cursorx	-	10,	cursory);
									glVertex2f	(cursorx	+	10,	cursory);
									glEnd();
	
									glBegin(GL_LINES);
																	glColor3f(1,	1,	1);
									glVertex2f	(cursorx,	cursory	-	10);
									glVertex2f	(cursorx,	cursory	+	10);
									glEnd();
	
									//glutSwapBuffers();
	}
	
	void	drawduck()
	{
		int i;
		for(i	=	0;	i	<=	duckcount	-	1;	i++)
									{
																	if(duckalive[i]	==	1)
																	{
																									glBegin(GL_QUADS);
																																	glColor3f(0.5,	0.35,	0.05);
																																	//glColor3f(1,	1,	1);
																																	glVertex2f	(duckx[i]	-	15,	ducky[i]	-	10);
																																	glVertex2f	(duckx[i]	-	15,	ducky[i]	+	10);
																																	glVertex2f	(duckx[i]	+	15,	ducky[i]	+	10);
																																	glVertex2f	(duckx[i]	+	15,	ducky[i]	-	10);
																									glEnd();
																	}
																	else
																	{
																									glBegin(GL_QUADS);																																	//glColor3f(0.5,	0.35,	0.05);
																																	glColor3f(0.5,	0,	0.05);
																																	glVertex2f	(duckx[i]	-	15,	ducky[i]	-	10);
																																	glVertex2f	(duckx[i]	-	15,	ducky[i]	+	10);
																																	glVertex2f	(duckx[i]	+	15,	ducky[i]	+	10);
																																	glVertex2f	(duckx[i]	+	15,	ducky[i]	-	10);
																									glEnd();
																	}
									}
	}
	
	void	drawground()
	{
									glBegin(GL_QUADS);
																	glColor3f(3,	0.5,	0);
																	glVertex2f	(0,	360);
									glVertex2f	(0,	480);
									glVertex2f	(640,	480);
									glVertex2f	(640,	360);
									glEnd();
	}
	
	void	drawString	(void	*	font,	char	const * s,	float	x,	float	y){
						unsigned	int	i;
						glRasterPos2f(x,	y);
										glColor3f(1,	1,	1);
						for	(i	=	0;	i	<	strlen	(s);	i++)
											glutBitmapCharacter	(font,	s[i]);
										//glutSwapBuffers();
	}
	/*This	function	update	the	position	of	the	duck	every	33	milliseconds	because	of	the	glutTimeFunc	so	it	is	call	30
	times	a	seconds	because	1000	/	33	=	30*/
	void	updategame(int	value)
	{
		int i;
									glutTimerFunc(33,	updategame,	0);	//call	updategame	after	33	milliseconds
	
									for(i	=	0;	i	<=	duckcount	-	1;	i++)
									{
																	if(duckalive[i]	==	1)
																	{
																									if(duckx[i]	-	10	<	0	||	duckx[i]	+	10	>	640)
																									{
																																	duckxdir[i]	=	-duckxdir[i];
																									}
	
																									if(ducky[i]	-	5	<	0	||	ducky[i]	+	5	>	360)
																									{
																																	duckydir[i]	=	-duckydir[i];
																									}
	
																									duckx[i]	=	duckx[i]	+	duckxdir[i];
																									ducky[i]	=	ducky[i]	+	duckydir[i];
	
																	}
																	else
																	{
																									if(ducky[i]	<	360)
																									{
																																	ducky[i]	=	ducky[i]	+	1.5;
																									}
																	}
									}
	}
	
	void	display()
	{
									glClear(GL_COLOR_BUFFER_BIT);
									glClearColor(0.43	,	0.77,	0.86,	1);
	
									drawground();
	
									drawduck();	
									drawcursor();
	
									//display	score
									drawString(GLUT_BITMAP_HELVETICA_18,	"score:",	10,	20);
									sprintf(buffer,"%d",score);
									drawString(GLUT_BITMAP_HELVETICA_18,	buffer,	70,	20);
	
									glutSwapBuffers();
									//Sleep(20);
	}
	
	void	reshape(int	x,	int	y)
	{
									glViewport(0,	0,	x,	y);
									glMatrixMode(GL_PROJECTION);
									glLoadIdentity();
									glOrtho(0,	640,	480,	0,	0,	1);
									glMatrixMode(GL_MODELVIEW);
	}
	
	int	main(int	argc,	char	**argv)
	{
									initgame();
									glutInit(&argc,argv);
									glutInitDisplayMode(GLUT_RGB|GLUT_DOUBLE);
									glutInitWindowPosition(100,100);
									glutInitWindowSize(640,480);
									glutCreateWindow("Duck	Hunt");
									glutReshapeFunc(reshape);
									glutDisplayFunc(display);
									glutKeyboardFunc(keypress);
									glutIdleFunc(display);
									glutTimerFunc(33,	updategame,	0);	//call	update	function	after	33	milli	seconds	
									glutMouseFunc(shoot);
									glutPassiveMotionFunc(setcursor);
									glutMotionFunc(setcursor);
									glutSetCursor(GLUT_CURSOR_NONE);
					glutMainLoop();
		return 0;
}
