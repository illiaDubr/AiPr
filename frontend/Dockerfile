# 1. Сборка проекта
FROM node:18 AS build-stage

# Устанавливаем рабочую директорию
WORKDIR /app

# Копируем файлы package.json и package-lock.json
COPY package*.json ./

# Устанавливаем зависимости
RUN npm install

# Копируем исходный код Vue-приложения
COPY . .

# Собираем проект
RUN npm run build

# 2. Сервер Nginx для раздачи
FROM nginx:latest AS production-stage

# Копируем собранный проект в папку, откуда Nginx будет раздавать статику
COPY --from=build-stage /app/dist /usr/share/nginx/html

# Экспортируем порт 80
EXPOSE 80

# Запускаем Nginx
CMD ["nginx", "-g", "daemon off;"]
