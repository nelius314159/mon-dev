#!/usr/bin/env bash

#

# Get list of Accedian LT-S devices from IRIS

#response=$(curl --silent --location --globoff \
#--request GET 'http://iris-dev.frogfoot.net/iris/api2/api/devices' \
#--user 'cpt-backup01:Pga<3;9{cz' \
#--data-urlencode 'search={"deleted":0,"hostname":{"like":"%-lts%"}}' | \
#jq -r '.data[] | "\(.hostname) \(.poller_a) \(.poller_b)"')


curl --silent --location --globoff --request GET 'http://iris-dev.frogfoot.net/iris/api2/api/devices' \
--user 'nelius@frogfoot.com:Jy0x[w0G-A' \
--data-urlencode 'search={"deleted":0,"hostname":{"like":"%-lts%"}}' | \
jq -r '.data[] | "\(.hostname) \(.poller_a) \(.poller_b)"'




