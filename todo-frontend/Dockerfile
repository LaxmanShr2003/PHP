FROM node:20-alpine AS build

# Set working directory
WORKDIR /app

# Install dependencies first (better cache)
COPY package.json package-lock.json ./
RUN npm install

# Copy source code
COPY . .
RUN npm run build

FROM nginx:alpine
COPY --from=build /app/dist /usr/share/nginx/html
EXPOSE 80
