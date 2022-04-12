#!/bin/sh
clear
for f in ./*_pd.pdf
do
mv -f "$f" "${f%*_pd.pdf}.pdf"
done

clear
