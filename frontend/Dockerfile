# Базовый образ Node.js
FROM node:18

# Устанавливаем рабочую директорию
WORKDIR /app

# Копируем package.json и package-lock.json
COPY package*.json ./

# Устанавливаем зависимости
RUN npm install

# Копируем весь исходный код
COPY . .

# Сборка проекта
RUN npm run build

# Используем Nginx для статического контента
FROM nginx:latest
COPY --from=0 /app/dist /usr/share/nginx/html

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
