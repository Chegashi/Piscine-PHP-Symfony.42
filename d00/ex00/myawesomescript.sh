#!/bin/sh
curl -s $1 | grep "href" | cut -f 2 -d '"'