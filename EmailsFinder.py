from pyhunter import PyHunter
import sys

if len(sys.argv) != 3:
	print "Usage:   ", sys.argv[0], "Domain APIkey"
	print "Example: ", sys.argv[0], "microsoft.com 0123456789"
	exit()

domain = sys.argv[1]
API = sys.argv[2]

print "Domain: ", domain
print "API Key: ", API
print "#############################################"

hunter = PyHunter(API)

for num in range(0,5):
	data = hunter.domain_search(company=domain, limit=100, offset=num*100)

	for x in data["emails"]:
		print x["value"]

