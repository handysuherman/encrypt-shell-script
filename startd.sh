#!/bin/sh
clear
 
for file in *.pdf
do
  qpdf --decrypt --password=123456  "$file" "${file%*.pdf}_dec.pdf"
done

source ./ds1.sh

clear

echo "Files are completed"

