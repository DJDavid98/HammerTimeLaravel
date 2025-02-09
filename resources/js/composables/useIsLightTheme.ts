import { onMounted, onUnmounted, ref, watch } from 'vue';

export function useIsLightTheme() {
  const isLightTheme = ref<boolean>(false);

  const themeWatcher = (value: boolean) => {
    if (typeof document === 'undefined') return;

    document.documentElement.dataset.theme = value ? 'light' : 'dark';
  };
  watch(isLightTheme, themeWatcher, { immediate: true });

  const colorSchemeMedia = typeof window !== 'undefined'
    ? window.matchMedia('(prefers-color-scheme: dark)')
    : undefined;
  const handleMediaChange = (e: Pick<MediaQueryListEvent, 'matches'>) => {
    isLightTheme.value = !e.matches;
  };

  onMounted(() => {
    if (!colorSchemeMedia) return;

    handleMediaChange(colorSchemeMedia);
    colorSchemeMedia.addEventListener('change', handleMediaChange);
  });

  onUnmounted(() => {
    colorSchemeMedia?.removeEventListener('change', handleMediaChange);
  });

  return isLightTheme;
}
