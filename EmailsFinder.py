from pyhunter import PyHunter
import sys

if len(sys.argv) != 5:
	print "Usage:   ", sys.argv[0], "Domain Count Start APIkey"
	print "Example: ", sys.argv[0], "microsoft.com 20 10 0123456789"
	print "Note: Hunter API Maximum Count is 100"
	exit()

domain = sys.argv[1]
count = int(sys.argv[2])
start = int(sys.argv[3])
API = sys.argv[4]

print "Domain:", domain
print "Count:", count
print "Start:", start
print "API Key:", API
print "#############################################"

hunter = PyHunter(API)

data = hunter.domain_search(company=domain, limit=count, offset=start)

for x in data["emails"]:
	print x["value"]
