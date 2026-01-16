# CI/CD Pipeline - Quick Start Guide

## 📋 What's Been Set Up

Your project now has a complete CI/CD pipeline with:

✅ **Automated Code Quality Checks**
- PHP syntax validation
- Code style (PSR-12) enforcement
- Static analysis with PHPStan
- Security scanning

✅ **Pull Request Validation**
- Syntax checks for changed files
- Secret detection
- Code size analysis

✅ **Automated Deployment**
- Automatic deployment to production on main branch push
- Deployment verification
- Slack notifications (optional)

## 🚀 Getting Started (5 minutes)

### Step 1: Push Changes to GitHub
```bash
git add .
git commit -m "Setup CI/CD pipeline"
git push origin main
```

### Step 2: Configure GitHub Secrets (Production Deployment)
Go to your repository → Settings → Secrets and variables → Actions

Add these secrets:
- `DEPLOY_HOST` - Your server IP/domain
- `DEPLOY_USER` - SSH username
- `DEPLOY_PATH` - Path on server (e.g., `/var/www/html`)
- `DEPLOY_SSH_KEY` - Your base64-encoded private SSH key
- `SLACK_WEBHOOK` - (Optional) For notifications

**Don't have an SSH key?** Run:
```bash
ssh-keygen -t ed25519 -f deploy_key -N ""
cat deploy_key | base64  # Copy this to DEPLOY_SSH_KEY secret
```

### Step 3: Enable Branch Protection (Recommended)
Repository → Settings → Branches → Add rule → main
- ✓ Require status checks to pass
- ✓ Require pull request reviews
- ✓ Require branches to be up to date

## 📊 Workflows Overview

| Workflow | Trigger | Purpose |
|----------|---------|---------|
| **lint.yml** | Push/PR | Code quality checks |
| **pr-checks.yml** | PR opened | PR validation & secret scanning |
| **deploy.yml** | Push to main | Auto-deploy to production |

## 💻 Local Development

### Install dependencies:
```bash
composer install
```

### Run quality checks locally:
```bash
composer run check          # Run all checks
composer run lint           # PHP CodeSniffer only
composer run lint:fix       # Auto-fix lint issues
composer run static-analysis # PHPStan only
```

## 📁 Files Created

```
.github/
  └─ workflows/
     ├─ lint.yml           # Code quality workflow
     ├─ pr-checks.yml      # PR validation workflow
     └─ deploy.yml         # Deployment workflow

Configuration files:
├─ .phpcs.xml             # PHP CodeSniffer config
├─ phpstan.neon           # Static analysis config
├─ composer.json          # PHP dependencies
└─ .env.example           # Environment template

Documentation:
├─ CI_CD_SETUP.md         # Detailed setup guide
├─ DEPLOYMENT.md          # Deployment procedures
└─ .gitignore             # Updated git ignore
```

## ✨ Next Steps

1. **Review the detailed guides:**
   - `CI_CD_SETUP.md` - Full configuration details
   - `DEPLOYMENT.md` - Deployment procedures

2. **Run locally to verify:**
   ```bash
   composer install
   composer run check
   ```

3. **Create a test branch to verify workflows:**
   ```bash
   git checkout -b test/ci-pipeline
   # Make a small change
   git push origin test/ci-pipeline
   # Create PR to see workflows in action
   ```

4. **Configure production secrets** when ready to deploy

## 🎯 Workflow Actions

### When you push to main:
1. ✓ Code quality checks run
2. ✓ If all pass → Auto-deploy (if secrets configured)
3. ✓ Deployment verified
4. ✓ Slack notification sent

### When you create a PR:
1. ✓ PR checks run
2. ✓ Secret scanning performed
3. ✓ Must pass to merge
4. ✓ Code review still required

## ⚠️ Important Notes

- **Never commit secrets** to Git
- Always use `.env` for local development
- Store sensitive values in GitHub Secrets
- SSH key must have proper permissions (600)
- Test deployment commands on server first

## 🔧 Customization

All workflow files are in `.github/workflows/` and can be customized:
- Adjust PHP versions in `lint.yml`
- Modify deployment paths in `deploy.yml`
- Change coding standards in `.phpcs.xml`

## 📞 Support

For detailed information, see:
- `CI_CD_SETUP.md` - Comprehensive setup guide
- `DEPLOYMENT.md` - Deployment manual
- GitHub Actions documentation: https://docs.github.com/en/actions

---

**Ready to deploy?** Your CI/CD pipeline is now active! 🎉
