# ARIA Metadata Management Plugin Library

[![OSV Scanner](https://github.com/FragmentScreen/ddapi-record-logs/actions/workflows/osv-scanner.yml/badge.svg)](https://github.com/FragmentScreen/ddapi-record-logs/actions/workflows/osv-scanner.yml)

This is a stub plugin library for the **ARIA metadata management service**, specifically designed for handling LOGS metadata.

For more information, visit: https://gitlab.com/aria-php/data-deposition-api

## Overview

This stub plugin provides a foundation for integrating LOGS metadata handling with the ARIA metadata management system.

## Security Scanning

This repo uses [OSV Scanner](https://github.com/google/osv-scanner) for vulnerability detection.

**When it runs:**
- Daily at 03:00 UTC (full scan)
- On PRs targeting main (changed deps only)
- On push to main (full scan)

**If vulnerabilities are found:**
1. Check the [Security tab](../../security) for alerts
2. To ignore false positives, add entries to `osv-scanner.toml`:
   ```toml
   [[IgnoredVulns]]
   id = "GHSA-xxxx-xxxx-xxxx"
   reason = "Justification"
   ```

**References:**
- [OSV Scanner docs](https://google.github.io/osv-scanner/)
- [GitHub Action](https://github.com/google/osv-scanner-action)
- [OSV Database](https://osv.dev/)
