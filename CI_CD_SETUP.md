# CI/CD Pipeline Documentation

## Overview
This project uses GitHub Actions for continuous integration and deployment (CI/CD).

## Workflows

### 1. Code Quality Checks (lint.yml)
- **Trigger**: Push to main/develop, Pull Requests
- **Tasks**:
  - PHP syntax validation across multiple versions (7.4, 8.0, 8.1)
  - PHP CodeSniffer (PSR-12 standard compliance)
  - PHPStan static analysis (level 5)
  - Security vulnerability scanning

### 2. Pull Request Checks (pr-checks.yml)
- **Trigger**: Pull Requests to main/develop
- **Tasks**:
  - PHP syntax validation for changed files
  - Secret detection using TruffleHog
  - PR size analysis (warns on >500 lines added)
  - File permission checks

### 3. Deployment (deploy.yml)
- **Trigger**: Push to main or manual workflow dispatch
- **Environment**: Production
- **Tasks**:
  - SSH key setup
  - Remote git pull and deployment
  - Deployment verification
  - Slack notifications

## Setup Instructions

### 1. GitHub Secrets Configuration
Add the following secrets in your GitHub repository settings (Settings > Secrets and variables > Actions):

```
DEPLOY_HOST         - Your server hostname or IP
DEPLOY_USER         - SSH user for deployment
DEPLOY_PATH         - Path to deploy directory on server
DEPLOY_SSH_KEY      - Private SSH key (base64 encoded)
SLACK_WEBHOOK       - (Optional) Slack webhook for notifications
```

### 2. SSH Key Setup
Generate an SSH key pair without passphrase:
```bash
ssh-keygen -t ed25519 -f deploy_key -N ""
```

Add the public key to your server's `~/.ssh/authorized_keys`:
```bash
cat deploy_key.pub >> ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
```

Encode the private key for GitHub secrets:
```bash
cat deploy_key | base64
```

### 3. Local Development

Install dependencies:
```bash
composer install
```

Run quality checks locally:
```bash
composer run check
```

Run linting only:
```bash
composer run lint
```

Fix linting issues automatically:
```bash
composer run lint:fix
```

Run static analysis:
```bash
composer run static-analysis
```

### 4. GitHub Configuration

#### Branch Protection Rules
1. Go to Settings > Branches > Add rule
2. Apply to `main` and `develop`
3. Enable:
   - "Require a pull request before merging"
   - "Require status checks to pass before merging"
   - "Require code reviews before merging"

#### Environment Variables
For the production environment, set:
- `DEPLOY_HOST`
- `DEPLOY_USER`
- `DEPLOY_PATH`

## Workflow Status Badges
Add to your README.md:

```markdown
![Code Quality Checks](https://github.com/Vrinda-Khandelwal/School-website/actions/workflows/lint.yml/badge.svg)
![Pull Request Checks](https://github.com/Vrinda-Khandelwal/School-website/actions/workflows/pr-checks.yml/badge.svg)
![Deployment](https://github.com/Vrinda-Khandelwal/School-website/actions/workflows/deploy.yml/badge.svg)
```

## Best Practices

1. **Never commit secrets** - Use GitHub Secrets instead
2. **Use feature branches** - Always create a branch for new features
3. **PR before merge** - All changes to main require PR review
4. **Local testing** - Run `composer run check` before pushing
5. **Keep PHP updated** - Test against supported PHP versions

## Troubleshooting

### Deployment fails with SSH error
- Verify SSH key is correctly base64 encoded
- Check server's `authorized_keys` file permissions (600)
- Ensure firewall allows SSH access

### Workflow status checks not appearing
- Verify workflows are enabled in Actions settings
- Check that branch protection rules reference correct workflow names
- Ensure workflows have write permissions

### Code quality checks failing
- Run `composer run lint:fix` to auto-fix issues
- Review PHPStan errors and fix type hints
- Check PHP version compatibility (7.4+)

## Contact & Support
For issues or questions, contact the development team.
