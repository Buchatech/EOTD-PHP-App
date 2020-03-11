# Excerpt from my blog post "BUILD & RELEASE A CONTAINER IMAGE FROM AZURE DEVOPS TO AZURE WEB APP FOR CONTAINERS" - http://www.buchatech.com/2020/03/build-release-a-container-image-from-azure-devops-to-azure-web-app-for-containers/

In this long blog post I am going to take things a step further and walk-through the build & release of a Container from Azure DevOps to Azure Web App for Containers. The overall goal of this post is to help someone else out if they want to setup a build and release pipeline for building and deploying a container to Azure App Service. We will use a very simple PHP web app I built that will run in the container.

Here are the components that are involved in this scenario:

Azure Container Registry (ACR): We will use this to store our container image. We will be pushing up the container image and pull it back down from the registry as a part of the build and release process.
Azure DevOps (ADO): This is the DevOps tooling we will use to build our container, push it up to ACR, pull it down into our release pipeline and then deploy to our Azure App Service.
App Service Web App for Containers: This is the web server service on Azure that will be used to host our container. Under the hood this will be a container that is running Linux and Apache to host the PHP web app.
Here is the data Flow for our containerized web app:

Deploy the Azure App Service Web App for Containers instance
Deploy the Azure Container Registry
Deploy the Azure DevOps organization and project, create repository to host the code, clone repository in VS Code (Not shown in this blog post. Assume you know how to this up.)
Update the application code (PHP code and Docker image) in Visual Studio code
Commit application code from Visual Studio code to the Azure DevOps repo (Not shown in this blog post. Assume you know how to this up.)
Setup build and then run container build and push the container image to ACR
 Setup release pipeline and then kick off the release pipeline pulling down the container image from ACR and deploys the container to the App Service Web App for Containers instance.
Here is a diagram detailing out the build and release process we will be using:


Note that all code used in this blog post is hosted on my GitHub here: https://github.com/Buchatech/EOTD-PHP-APP-DOCKER-CONTAINER
