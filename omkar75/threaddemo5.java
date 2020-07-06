class sumthread extends Thread
{
  private int nos[], start, end, sum;
  public sumthread (int a[], int s, int e)
  {
    nos = a;
    start =s;
    end = e;
    sum = 0;
  }
  public void run ()
  {
    for (int i = start; i <= end; i++)
      {
	System.out.println (this+":"+nos[i]);
	sum += nos[i];
	try
	{
	  Thread.sleep ((int) (Math.random () * 1000));
      } catch (Exception e){}
}
    public int getsum(){
      return sum;
    }
  }
  class threaddemo5{
    public static void main (String args[])
    {
      sumthread st[] = new sumthread[10];
      int a[] = new int[1000];
      for (int i = 0; i <= 1000; i++)
	{
	  a[i] = ((int) (Math.random () * 1000));
	}
      for (int i = 0; i < 10; i++)
	{
	  st[i] = new sumthread (a, i * 100, (i + 1) * 100 - 1);
	  st[i].start ();
	}
      for (int i = 0; i < 10; i++)
	{
	  try
	  {
	    st[i].join ();
	  } catch (Exception e)
	  {
	  }
	}
      int tot = 0;
      for (int i = 0; i < 10; i++)
	tot += st[i].getsum ();
      System.out.println ("sum=" + tot + "\n Avg=" + (tot / 1000.0));
    }
  }
}
