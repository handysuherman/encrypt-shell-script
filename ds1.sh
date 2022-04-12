#!/bin/sh
clear
for f in *_dec.pdf
do
mv -f "$f" "${f%*_dec.pdf}.pdf"
done


clear

