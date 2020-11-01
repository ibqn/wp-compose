if [[ ! -f /etc/letsencrypt/live ]]
then
    echo 'No letsencrypt certificate found. Registering one...'
    certbot --nginx -d "${DOMAIN}" --noninteractive --agree-tos --email "${EMAIL}"
fi

nohup bash -c "while inotifywait -e close_write /etc/letsencrypt/live; do nginx -s reload; done &"

