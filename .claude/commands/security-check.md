---
description: Scan vendored JS/CSS libraries for known CVEs with retire.js and report findings
---

Run the vulnerability scan and interpret the results:

1. Run `npm install` if `node_modules` is missing, then run `npm run security-check`.
2. For each finding, check whether it's already known: see open GitHub issues (`gh issue list --label security`) and `CLAUDE.md`'s Development workflow section.
3. Report findings in three buckets:
   - **New and fixable**: a newer version of the library exists that resolves it. Propose upgrading, following the same process as before, check for breaking API changes in `main.js` and other vendored plugins before swapping files, then smoke-test with the `run` skill.
   - **New and unfixable**: no patched version exists in the library's current major-version line. Open a GitHub issue documenting it and leave the check failing rather than suppressing it (this repo's convention: transparency over a green check).
   - **Already known**: findings matching an existing open issue. Note that CI is expected to be red for these until that issue is resolved; don't try to silence them.

Do not add retire.js ignore/suppression config without explicit user confirmation.
