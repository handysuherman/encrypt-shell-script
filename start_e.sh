#!/bin/sh

read -p "Enter Directory:" dir

for file in *_e.sh
do
	cp $file /home/handy/$dir
done

source /home/handy/$dir/es1_e.sh
