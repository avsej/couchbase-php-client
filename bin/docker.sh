#!/usr/bin/bash -xe

GITHUB_USERNAME=${GITHUB_USERNAME:-$(whoami)}
REPO_NAME="couchbase-php-client"
IMAGE_NAME="couchbase-php-client"
TIMESTAMP=$(date +%Y%m%d%H%M%S)
GHCR_REGISTRY="ghcr.io"

PROJECT_ROOT="$( cd "$(dirname "$0"/..)" >/dev/null 2>&1 ; pwd -P )"

docker buildx build -t $IMAGE_NAME:SDKv4 $PROJECT_ROOT

docker tag $IMAGE_NAME:SDKv4 $GHCR_REGISTRY/$GITHUB_USERNAME/$REPO_NAME:SDKv4_$TIMESTAMP
docker tag $IMAGE_NAME:SDKv4 $GHCR_REGISTRY/$GITHUB_USERNAME/$REPO_NAME:SDKv4

docker push $GHCR_REGISTRY/$GITHUB_USERNAME/$REPO_NAME:SDKv4_$TIMESTAMP
docker push $GHCR_REGISTRY/$GITHUB_USERNAME/$REPO_NAME:SDKv4

set +x
echo docker pull $GHCR_REGISTRY/$GITHUB_USERNAME/$REPO_NAME:SDKv4
echo docker run -ti --rm -p 8083:8083 $GHCR_REGISTRY/$GITHUB_USERNAME/$REPO_NAME:SDKv4
