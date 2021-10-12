> [Larabeans](README.md) > Core (Beaner)

---

# Core (Beaner)

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

- User.php
- Role.php
- Permission.php

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

---
> [Larabeans](README.md) > Core (Beaner) [⬆](#uuider)
