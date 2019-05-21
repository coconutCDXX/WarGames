
string=$(echo 3D3D516343746D4D6D6C315669563362)
echo $string
# bin=$(echo "ibase=16; obase=2; $string" | bc)
# echo $bin
# # test=$()
# binn=$(echo $bin | tr -d ' ' | tr -d '\')
# echo $binn
# hex=$(printf '%x\n' "$((2#$binn))")
# echo $hex
ascii=$(echo $string | xxd -r -p)
echo $ascii
rev=$(echo $ascii | rev)
echo $rev
b64=$(echo $rev | base64 -D)
echo $b64

