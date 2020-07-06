#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int nop;
int get_FCFS();

struct process_info
{
  char pname[10];
  int at, bt, ct, bt1;
} p[10];

void
accept_info ()
{
  int i;

  printf ("enter the no of process\n");
  scanf ("%d", &nop);

  for (i = 0; i < nop; i++)
    {
      printf ("enter the process name");
      scanf ("%s", &p[i].pname);

      printf ("enter the arival time");
      scanf ("%d", &p[i].at);

      printf ("enter the burst time");
      scanf ("%d", &p[i].bt);

      p[i].bt1 = p[i].bt;

    }
}


void
display ()
{
  int i;
  float avgTAT, avgWT = 0, x, y;

  printf ("process\tAT\tBT\tCT\tTAT\tWT\n");

  for (i = 0; i < nop; i++)
    {
      x = p[i].ct - p[i].at;
      y = x - p[i].bt;

      printf ("%s\t%d\t%d\t%d\t%.2f\t%.2f\n", p[i].pname, p[i].at, p[i].bt,
	      p[i].ct, x, y);


      avgTAT += x;
      avgTAT += y;

    }

  printf ("AVGTAT =%f\n AVGWT=%f\n", avgTAT / nop, avgWT / nop);
}

void
sort ()
{
  int i, j;

  for (i = 0; i < nop - 1; i++)
    {
      for (j = 0; j < nop - 1 - i; j++)
	{
	  if (p[j].at > p[j + 1].at)
	    {
	      struct process_info t;

	      t = p[j];

	      p[j] = p[j++];
	      p[j + 1] = t;

	    }
	}
    }
}

int time;

int
get_FCFS ()
{

  int i;

  for (i = 0; i < nop; i++)
    {
      if (p[i].at <= time && p[i].bt1 != 0)
	{
	  return i;
	}
      return -1;
    }
}
  struct gantt_chart
  {

    int start;
    char pname[10];
    int end;
  } s[100], s1[100];

  int k;

  void fcfs ()
  {
    int i;
    int n = 0, prev;

    while (n != nop)
      {
	i = get_FCFS ();

	if (i == -1)
	  {

	    prev = time;
	    time++;

	    s[k].start =prev;
	    strcpy (s[k].pname, "*");
	    s[k].end =time;
	    k++;
	  }
	else
	  {
	    prev = time;
	    time += p[i].bt1;
	    p[i].bt1 = 0;

	    p[i].ct = time;

	    s[k].start = prev;
	    strcpy (s[k].pname, p[i].pname);
	    s[k].end = time;
	    k++;
	    n++;
	  }

      }

    void print_gannt_chart ()
    {

      int i, j;

      s1[0] = s[0];

      for (i = 1, j = 0; i < k; i++)
	{
	  if (strcmp (s[i].pname, s1[i].pname) == 0)
	    s1[j].end = s[i].end;
	  else
	    s1[++j] = s[i];
	}
      printf ("%d", s1[0].start);

      for (i = 0; i <= j; i++)
	{
	  int m = s1[i].end - s1[i].start;

	  for (k = 0; k < (m + 1) / 2; k++)

	    printf ("-");

	  for (k = 0; k < (m + 1) / 2; k++)

	    printf ("-");

	  printf ("%d", s1[i].end);

	}
    }
}
    int main ()
    {
      accept_info ();
      sort ();
      fcfs ();
      display ();
      

      return 0;
    }










































































































