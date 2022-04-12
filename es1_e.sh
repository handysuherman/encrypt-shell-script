#!/bin/sh

# First action
# Please read here before you are starting ...
# 1. STRONGLY RECOMMEND BACK UP YOUR FILES FIRST
# 2. You can modify "qpdf --encrypt [user-password] [owner-password] [either its 40 , 128, or 256 feel free to choose as you want]"
# 3. It may sounds dumb.. but the encryption can be replaced w/o you decrypting it first, just make sure the filename are not the same as the previous encryptedfile name
# 4. Make sure the folder path is the same as your desired path. 
######################################################################################################
clear

# Encrypting
for file in $path/*.pdf
do
  qpdf --encrypt 123456 123456 256 -- "$file" "${file%*.pdf}_pd.pdf"
done

source ./es2_e.sh
# Moving & Run another bash script at another directory

# Next command after '&&'  Moving to another directory, in order to prevent error.proccess while encrypting files , removing the original one, and replacing back the file where it supposed to be.
clear

