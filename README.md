# Symfony Project README

## Project Overview

This is a Symfony project showcasing various features such as Doctrine ORM, Dependency Injection, Middleware and Filters, RESTful APIs for React, Event Dispatcher, and Symfony Flex. The project is designed for learning purposes, and the code is heavily commented to assist in understanding each component.

## Prerequisites

Before you begin, ensure that you have the following installed on your machine:

- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/sabahat-saeed/symphony_handson.git
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Update the database schema:

    ```bash
    php bin/console doctrine:schema:update --force
    ```

## Usage

### Run the Symfony Development Server

```bash
symfony server:start
