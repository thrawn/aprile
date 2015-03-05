#!/bin/bash -ex
# awk -F '#' '{print "insert into
# seaports(locode,country_code,country_name,port_code,port_name) values ('\''"
# $1 "'\'','\''" $2 "'\'','\''" $3 "'\'','\''" $4 "'\'','\''" $5 "'\'')"}'
# port_codes4.txt > seaload.txt
FILE=$1

tail -n+2 ${FILE} > tmp.txt
sed -i "s/,/','/g" tmp.txt
while read line
do
    SQL="insert into inventory ( customer_id, account_number, created_by,
    job, po, shipper, consignee, vessel, ets, pol, eta, pod, line,
    cntr_quantity, cntr_size, cntr_number, notes, created_at, updated_at )  values (
    '1','100100','michael','${line}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);"
    echo ${SQL}

done < tmp.txt
