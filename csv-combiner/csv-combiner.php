python generatefixtures.py

for input_file in "$@"
do
	sed '1s/\s$/,"filename"/; 2,$s/\s*$/,input_file/' "$input_file" > "$input_file"
done

cat fixtures/*.csv
