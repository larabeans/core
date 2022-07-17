> [Larabeans](README.md) > Core

---

# Core

> APIATO container that contains parent classes or common code used by all containers provided by Larabeans.

* [Overview](#overview)
* [Config](#config)
* [Parents](#parents)
* [Models](#models)
* [Traits](#traits)
* [Scopes](#scopes)

---

## Overview

---

## Config

---

## Parents

Adds parent models, extending Apiato parent models under parent namespace.

- Parents/Models/Model.php

---

## Models

Below models are provided as default models having modification required for UUID or tenant. You can extend these or
implement you own. Don't forget to update config file accordingly.

- Core/Models/User.php
- Core/Models/Role.php
- Core/Models/Permission.php
- Core/Parents/Models/Model.php


Note: Above model uses below listed traits, and these are commented by default, before proceeding to data migration, 
un comments as per your requirement. Just make sure relevant container is already installed.

---

## Traits

Reusable Traits

- HasUuid (Works along with uuider container)
- MultiTenantable (Works along with tenanter container)
- HasLocation (Works along with locationer container)
- HasLocations (Works along with locationer container)
- HasMobileLocation (Works along with locationer container)

---

## Scopes

- MultiTenantableScope (Works along with tenanter container)
- Update CreateRoleRequest file to remove unique name rule and add ( 'name' => 'required|min:2|max:20|no_spaces' )

---
> [Larabeans](README.md) > Core [⬆](#uuider)
