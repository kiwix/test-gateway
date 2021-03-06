# kiwix test-gateway

This docker image provides an endpoint that can be called to start a
Testdroid test with a standard configuration without knowing our API
key. This means that files can be uploaded to testdroid by a dummy
user with no permissions and then shared with the main account. Then
we can be passed their file ids and a build number and this script
will run the test suite using our hidden API key.

To build the Docker image locally:
```
docker build . -t kiwix/test-gateway
```

You can otherwise find it on Docker hub:
```
kiwix/test-gateway
```

To run the docker:
```
docker run -p 80:80 -e KEY='KEY-HERE' -e PROJECT='PROJECT-ID-HERE' kiwix/test-gateway
```