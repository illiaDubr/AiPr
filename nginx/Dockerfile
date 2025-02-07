# =============== 1) СБОРКА VUE ===============
FROM node:18 AS build

WORKDIR /app
# Скопируем package*.json, установим зависимости
COPY ../frontend/package*.json ./
RUN npm install

# Скопируем остальной код фронтенда и соберём
COPY ../frontend/ ./
RUN npm run build

# =============== 2) ФИНАЛЬНЫЙ STAGE: NGINX ===============
FROM nginx:alpine

# Кладём наш конфиг для Nginx
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Копируем результат сборки Vue из предыдущего stage
COPY --from=build /app/dist /usr/share/nginx/html

# Порт 80 уже EXPOSE-ится по умолчанию, 
# но на всякий случай можно явно указать:
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
