# COMP-6620-Final-Project
The final project for COMP 6620 User Interface Design and Evaluation.
- This project is s2i compliant (Source-to-Image).
- The project can be deployed in Kubernetes, Openshift, or locally in a container
- For source code specific questions, please refer to app-src/README.md
- The image is based on the lastest free UBI8 so it is RHEL binary compatible


To deploy this project locally in a container, do the following:
- Obtain a copy of dbcreds.php and add it to app-src/dbcreds.php
- Create the image: podman build -t bjc-php .
- Deploy the image: podman run --name bjc-php -p 8080:8080 -d bjc-php
- Access the URL: localhost:8080

Additonally, this can be deployed directly into Kubernetes, Openshift, or Firebase
- The MySQL DB should already be created
- The repo URL can be used directly to deploy the image
- Make sure to follow best practice of your chosen Container Orchestration platform
- We recommend the rolling release strategy to quickly deploy and release Code
- High availability and redundancy are supported by the image

TODO:
- In order to properly take advantage of all orchestration features, we recommend that strong unit, functional, and integration testing be developed
- Additionally, it is recommened to run this in a CI/CD pipeline with the develop[ed testing so that the application can safgely be deployed into production on a nightly basis
- We also strongly recomend the A/B (Blue/Green) deployment strategy so the application can meetbasic SLAs for uptime.This gurantees your application never drops, even when a bug is detected.
