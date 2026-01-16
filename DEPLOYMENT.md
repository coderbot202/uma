# Deployment Manual

## Pre-Deployment Checklist

- [ ] All tests pass locally
- [ ] Code review completed
- [ ] No security warnings from TruffleHog
- [ ] Database migrations ready (if applicable)
- [ ] Environment variables configured on server
- [ ] Backup created of current production

## Deployment Procedure

### Automatic Deployment (Recommended)
Merge to main branch - GitHub Actions will automatically:
1. Run all code quality checks
2. If passes, deploy to production
3. Verify deployment with HTTP check
4. Send Slack notification

### Manual Deployment
If needed, trigger manually in GitHub Actions:
1. Go to Actions > Deployment
2. Click "Run workflow"
3. Select branch (main)
4. Click green "Run workflow" button

## Post-Deployment Verification

1. **Check Website Status**
   ```
   curl -I https://your-website.com
   ```

2. **Review Error Logs**
   ```bash
   ssh user@server "tail -f /var/log/apache2/error.log"
   ```

3. **Test Key Features**
   - Homepage loads correctly
   - Contact form works
   - Admin pages accessible
   - Database connections functional

4. **Performance Check**
   - Page load times acceptable
   - No PHP errors in logs
   - Database queries optimized

## Rollback Procedure

If deployment fails or causes issues:

1. **Quick Rollback**
   ```bash
   ssh user@server "cd /var/www/html && git revert HEAD"
   ```

2. **Full Rollback to Backup**
   ```bash
   ssh user@server "cp -r /backups/last-good-backup/* /var/www/html/"
   ```

3. **Clear Cache** (if applicable)
   ```bash
   ssh user@server "rm -rf /tmp/php-cache/*"
   ```

4. **Restart Services**
   ```bash
   ssh user@server "sudo systemctl restart apache2"
   ```

## Monitoring

After deployment, monitor:
- Application error logs
- Server CPU/Memory usage
- Database performance
- Website uptime

## Emergency Contacts

- DevOps Lead: [Contact Info]
- System Administrator: [Contact Info]
- On-Call: [Contact Info]
