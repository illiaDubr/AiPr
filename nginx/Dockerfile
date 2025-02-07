# Базовый образ Nginx
FROM nginx:latest

# Копируем конфигурацию Nginx
COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
