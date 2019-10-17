from googlesearch import search
import os, sys

if len(sys.argv) != 4:
	print "Usage:   ", sys.argv[0], "Domain Filetypes Count"
	print "Example: ", sys.argv[0], "microsoft.com pdf,doc,dot,docx,odp,ods,xls,xlt,xlsx,ppt,pot,pptx 20"
	exit()

domain = sys.argv[1]
filetypes = sys.argv[2]
filetypes = filetypes.split(',')
count = int(sys.argv[3])

print "Domain: ", domain
print "Filetypes: ", filetypes
print "Number of retrieved files: ", count
print "#############################################"

for filetype in filetypes:
	print "Search for type: ", filetype
	for url in search('site:'+domain+' filetype:'+filetype, num=10, stop=count):
		print "###############################################################"
		print "URL: ", url
		print "###############################################################"
		os.system('wget -P ./result/ "' + url + '"')
