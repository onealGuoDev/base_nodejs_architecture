FROM node:12.15-alpine

ARG NODE_ENV=development
ENV NODE_ENV=${NODE_ENV}

WORKDIR /usr/src/app

COPY . .
RUN npm install -g node-gyp
RUN npm install --unsafe-perm sharp
RUN apk add ffmpeg
EXPOSE 3333

CMD ["node","./dist/app.js" ]

