import { test, expect } from '@playwright/test';
import fs from 'node:fs';

test('capture the current homepage', async ({ page }, testInfo) => {
  const response = await page.goto('/', { waitUntil: 'networkidle' });

  expect(response).not.toBeNull();
  expect(response.ok()).toBeTruthy();
  await expect(page.locator('body')).toBeVisible();

  fs.mkdirSync('artifacts/screenshots', { recursive: true });
  await page.screenshot({
    path: `artifacts/screenshots/${testInfo.project.name}.png`,
    fullPage: true,
  });
});
