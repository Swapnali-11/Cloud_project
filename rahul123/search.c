#include<stdio.h>
#include<string.h>
int main()
{
	char names[20][100],search[100];
	int i,j,n;

	printf("Enter no.of names:");
	scanf("%d",&n);

	gets(names[0]);

	for(i=0;i<n;i++)
	{
		printf("Enter name=");
		gets(names[i]);
	}

	printf("Enter the name to search:");
	gets(search);

	for(i=0;i<n;i++)
	{
		if(strcmp(names[i],search)==0) break;
	}

	if(i==n)
		printf("%s not found.\n", search);
	else
		printf("%s found at position %d\n", search, i);

	return 0;
}
