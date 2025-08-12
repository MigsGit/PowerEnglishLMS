CONTAINER_PHP=we-pixelx
setup: #Run Setup from the sratch #@make composer-update
	@make build
	@make up

ps:  #Check docker containers
	docker-compose ps
build: #Run build force and no cache
	docker-compose build --no-cache --force-rm
fresh: #Refresh containers
	@make stop
	@make up
stop: #Stop containers
	docker-compose stop
up: #Run all containers
	docker-compose up -d

# In laravel, the edit the ${CONTAINER_PHP} to run the script below.
cache: #Laravel Clear Cache
    docker exec ${CONTAINER_PHP} bash -c "php artisan config:cache"
    docker exec ${CONTAINER_PHP} bash -c "php artisan config:clear"
    docker exec ${CONTAINER_PHP} bash -c "php artisan cache:clear"

composer-update: #Laravel Composer update
	docker exec ${CONTAINER_PHP} bash -c "composer update"
data: #Laravel Migration
	docker exec ${CONTAINER_PHP} bash -c "php artisan migrate"
	docker exec ${CONTAINER_PHP} bash -c "php artisan db:seed"
key-generate: #Laravel Key Generate
	docker exec ${CONTAINER_PHP} bash -c "php artisan key:generate"

# Docker Remove Command
#Check the php version on specific image
    #docker run --rm <image_name_or_id> php -v #Check the php version on specific image
#remove the images
rm-image:
	docker rmi <IMAGE_ID>
#FORCE remove the images, be careful to this command
rm-image-force:
	docker rmi -f <IMAGE_ID>
