#include<stdio.h>

int main()
{
	int n, i,j,k=65;

	printf("Enter no.of lines:");
	scanf("%d", &n);

	for(i=n;i>=1;i--)
	{
		for(j=1;j<=i;j++)
			printf("%4c",k++);

		printf("\n");
	}

	return 0;
}
