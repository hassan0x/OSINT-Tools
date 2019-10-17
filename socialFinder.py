from googlesearch import search
import sys

if len(sys.argv) != 3:
	print "Usage:   ", sys.argv[0], "Domain Count"
	print "Example: ", sys.argv[0], "microsoft.com 50"
	exit()

domain = sys.argv[1]
count = int(sys.argv[2])

print "Domain: ", domain
print "Number of Users: ", count
print "#############################################"

for url in search('site:linkedin.com/in/ "'+domain+'"', num=10, stop=count, pause=10):
	print url

