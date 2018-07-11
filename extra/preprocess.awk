#!/usr/bin/gawk -f

function readfile(filename,	content, line) {
	while ((getline line < filename) > 0) {
		if (content == "") {
			content=line
		}
		else {
			content=content "\n" line
		}
	}
	return content
}

BEGIN {
	FS="\n"
}

! /{{[^}]*}}/ {
	print
}

/{{include:[^}]*}}/ {
	match($0, "{{include:([^}]*)}}", f)
	filename=f[1]
	include=readfile(filename)
	sub(/{{include:[^}]*}}/, include)
	print
}

END {
}
