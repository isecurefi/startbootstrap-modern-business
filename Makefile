export:
	rm -f web.tar.bz2
	git archive master | bzip2 > web.tar.bz2
